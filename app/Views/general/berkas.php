<?= $this->extend('layout/template-mobile'); ?>
<?= $this->section('content'); ?>



<div id="dashboard-mobile">
	<div class="container pb-5">
		<input type="hidden" id="email" value="<?= session('email_wotle'); ?>" readonly>
		<input type="hidden" id="kategori-halaman" value="profile">
		<div class="h3 py-4 mb-3 fw-bold pb-3 border-bottom text-wotle px-4 d-flex align-items-center">
			<div class="me-3 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" class="w-50px me-1"></div> 
			<div>Berkas</div>				
		</div>				
	</div>
	<?php if(session()->get('role_wotle') == 'driver') : ?>			
					<div class="card border-0 br-15 mb-4">
						<div class="card-body px-3">				
							<div class="mb-5  text-secondary d-flex align-items-center">
								<div class="me-3 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" class="w-30px me-1"></div> 
								<div class="fw-bold">Berkas Pribadi</div>
								<div class="bg-primary-light rounded-pill ms-2 small px-3">Completed</div>
							</div>								
							<div class="row">
								<div class="col-6 text-center mb-3">
									<div class="w-xy-200 mx-auto position-relative">
										<div class="mb-3 judul-berkas">Foto KTP</div>
										<img src="" class="br-10 object-fit-cover hover-scale-1 cursor-pointer assets-driver img-file-ktp" data-bs-toggle="modal" data-bs-target="#lihat-gambar">
									</div>
								</div>
								<div class="col-6 text-center mb-3">
									<div class="w-xy-200 mx-auto position-relative">
										<div class="mb-3 judul-berkas">Foto STNK</div>
										<img src="" class="br-10 object-fit-cover hover-scale-1 cursor-pointer assets-driver img-file-stnk" data-bs-toggle="modal" data-bs-target="#lihat-gambar">
									</div>
								</div>
								<div class="col-6 text-center mb-3">
									<div class="w-xy-200 mx-auto position-relative">
										<div class="mb-3 judul-berkas">Foto SIM</div>
										<img src="" class="br-10 object-fit-cover hover-scale-1 cursor-pointer assets-driver img-file-sim" data-bs-toggle="modal" data-bs-target="#lihat-gambar">
									</div>
								</div>
								<div class="col-6 text-center mb-3">
									<div class="w-xy-200 mx-auto position-relative">
										<div class="mb-3 judul-berkas">Foto SKCK</div>
										<img src="" class="br-10 object-fit-cover hover-scale-1 cursor-pointer assets-driver img-file-skck" data-bs-toggle="modal" data-bs-target="#lihat-gambar">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card border-0 br-15">
						<div class="card-body px-3">				
							<div class="d-flex justify-content-between mb-4">
								<div class="fw-bold text-secondary">Detail Kendaraan</div>
								<input type="hidden" name="id_driver" id="id-user">
								<button class="btn btn-wotle btn-sm  btn-edit-kendaraan hide">Edit data kendaraan</button>
								<div class="card-btn-kendaraan hide">
									<div class="d-flex">
										<button class="btn btn-wotle btn-sm  btn-simpan-kendaraan hide me-2">Simpan</button>
										<button class="btn btn-wotle btn-sm  btn-back-simpan-kendaraan hide">Batal</button>
									</div>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-3">Merk Mobil</div>
								<div class="col-8 merk-mobil"></div>
								<div class="col-8 hide">
									<input type="text" class="form-control border-0 text-wotle border-bottom shadow-none" name="merk-mobil" id="input-merk-mobil">
									<div class="invalid-feedback merk-mobil"></div>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-3">Plat Nomor</div>
								<div class="col-8 plat-nomor"></div>
								<div class="col-8 hide">
									<input type="text" class="form-control border-0 text-wotle border-bottom shadow-none" name="plat-nomor" id="input-plat-nomor">
									<div class="invalid-feedback plat-nomor"></div>
								</div>
							</div>					
						</div>
					</div>				
				<?php endif; ?>
</div>

<!-- Modal Lihat Gambar-->
<div class="modal fade" id="lihat-gambar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content  shadow border-0">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Gambar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="w-100">
        	<img src="" class="object-fit-cover lihat-gambar">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm w-100" data-bs-dismiss="modal">Tutup</button>        
      </div>
    </div>
  </div>
</div>









<script>

	$('.assets-driver').click(function(){
		$("img.lihat-gambar").attr('src','');
		let getSrc = $(this).attr('src');
		$("img.lihat-gambar").attr('src',getSrc);
	})

	let email = $('#email').val();
	getProfile(email);	

	function updateProfile(email, nama, ttl, alamat, no_darurat){	
		let halaman = $('#kategori-halaman').val();
		$.ajax({
			url : 'https://apiwotleweb.wotle.org/updateProfile',
			type : 'post',
			dataType : 'json',
			data : {
				email : email,
				nama : nama,				
				ttl : ttl,				
				alamat : alamat,
				no_darurat : no_darurat,
				halaman : halaman,
			},
			success: function(result){
				$('.btn-simpan-profile').html('Simpan').addClass('hide');
				$(".name-user, .ttl-user, .alamat-user, .btn-edit-profile").removeClass('hide');
				$("#input-name-user, #input-ttl-user, #input-alamat-user").parent().addClass('hide');			
				getProfile(email);
				$(".btn-edit-profile").html('Data profile berhasil diubah').removeClass('btn-wotle').addClass('btn-warning');
				setTimeout(function(){
					$(".btn-edit-profile").html('Edit profile').removeClass('btn-warning').addClass('btn-wotle');
				},3000);
			}
		})
	}

	function updateKendaraan(idDriver, merkMobil, platNomor){
		$.ajax({
			url : 'https://apiwotleweb.wotle.org/updateKendaraan',
			type : 'post',
			dataType : 'json',
			data : {
				id : idDriver,
				merk : merkMobil,
				plat : platNomor,
			},
			success : function(result){				
				if(result.code == '200'){
					$('.btn-simpan-kendaraan').html('Simpan').addClass('hide');
					$('.card-btn-kendaraan').addClass("hide");
					$('.merk-mobil, .plat-nomor, .btn-edit-kendaraan').removeClass('hide')	
					$(".btn-edit-kendaraan").html("Data berhasil diubah").removeClass('btn-wotle').addClass("btn-warning");
					$("#input-merk-mobil,#input-plat-nomor").parent().addClass('hide');
					$.each(result.kendaraan, function(i, kendaraan){ 						 				
		 				$('.merk-mobil').html(": "+kendaraan.tipe_kendaraan);
		 				$('#input-merk-mobil').val(kendaraan.tipe_kendaraan);
		 				$('.plat-nomor').html(": "+kendaraan.plat_nomor);
		 				$('#input-plat-nomor').val(kendaraan.plat_nomor);		 						 			
		 			})

		 			setTimeout(function(){
						$(".btn-edit-kendaraan").html("Edit data kendaraan").removeClass('btn-warning').addClass('btn-wotle');
		 			},4000);
				}
			}
		})
	}

	function getProfile(email){		
		$.ajax({
			url : 'https://apiwotleweb.wotle.org/profile',
			type : 'post',
			dataType : 'json',
			data : {
				email : email
	 		},
	 		success: function(result){
	 			if(result.code == '200'){
		 			$.each(result.profile, function(i, profile){ 				
		 				$('.img-user').attr('src','/wotle_assets/img/foto/foto.webp');
		 				$('.name-user').html(profile.nama); 				
		 				$('#input-name-user').val(profile.nama); 				
		 				$(".email-user").html('email : '+profile.email);
		 				$(".ttl-user").html('<i class="fa-solid fa-calendar-days me-2 fa-fw"></i>' + profile.ttl);
		 				$("#input-ttl-user").val(profile.ttl);
		 				$('.alamat-user').html('<i class="fa-solid fa-location-dot me-2 fa-fw"></i>'+profile.alamat);
						$("#input-alamat-user").val(profile.alamat);	 				
		 				$('.merk-mobil').html(": "+profile.tipe_kendaraan);
		 				$('#input-merk-mobil').val(profile.tipe_kendaraan);
		 				$('.plat-nomor').html(": "+profile.plat_nomor);
		 				$('#input-plat-nomor').val(profile.plat_nomor);
		 				$('.img-file-ktp').attr('src', profile.ktp);
		 				$('.img-file-sim').attr('src', profile.sim);
		 				$('.img-file-stnk').attr('src', profile.stnk);
		 				$('.img-file-skck').attr('src', profile.skck);
		 				$('.role-user').html('Level : ' + profile.role)
		 				$('#id-user').val(profile.id);		 				
		 				if(profile.status == 'aktif'){ 					
		 					$('.status-user').html('Status : Aktif <i class="fa-solid fa-check ms-2"></i>').addClass("text-lime fw-bold");
		 				}else if(profile.status == 'nonaktif'){
		 					$('.status-user').html('Status : Non Aktif').addClass("text-danger"); 					
		 				}else if(profile.status == 'ditangguhkan'){
		 					$('.status-user').html('Status : Ditangguhkan').addClass("text-danger"); 					
		 				}else{
		 					$('.status-user').html('Status : lainnya').addClass("text-danger"); 							 					
		 				}
		 			})
		 			$(".btn-edit-kendaraan").removeClass('hide');			

		 			// untuk bagian edit kendaraan
		 			$('.btn-edit-kendaraan').click(function(){
						$(".merk-mobil, .plat-nomor, .btn-edit-kendaraan").addClass("hide");
						$("#input-merk-mobil,#input-plat-nomor").parent().removeClass('hide');
						$(".btn-simpan-kendaraan, .btn-back-simpan-kendaraan, .card-btn-kendaraan").removeClass('hide')			
					})
					$('.btn-back-simpan-kendaraan').click(function(){
						$(".merk-mobil, .plat-nomor, .btn-edit-kendaraan").removeClass("hide");
						$("#input-merk-mobil,#input-plat-nomor").parent().addClass('hide');
						$(".btn-simpan-kendaraan, .btn-back-simpan-kendaraan, .card-btn-kendaraan").addClass('hide')			
					})

					$(".btn-simpan-kendaraan").click(function(){
						$("#input-merk-mobil,#input-plat-nomor").removeClass('is-invalid');
						$(".invalid-feedback.merk-mobil, .invalid-feedback.plat-nomor").html('');
						let inputMerkMobil = $('#input-merk-mobil').val();
						let inputPlatNomor = $('#input-plat-nomor').val();
						let idDriver = $('#id-user').val();
						if(inputMerkMobil == ''){
							$("#input-merk-mobil").addClass("is-invalid").focus();
							$(".invalid-feedback.merk-mobil").html("Merk mobil tidak boleh kosong");
						}else if(inputPlatNomor == ''){
							$("#input-plat-nomor").addClass("is-invalid").focus();
							$(".invalid-feedback.plat-nomor").html("Plat nomor tidak boleh kosong");
						}else{
							$(this).html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);
							updateKendaraan(idDriver,inputMerkMobil,inputPlatNomor);
						}
					})		
					$("#input-merk-mobil,#input-plat-nomor").keypress(function(e){
						if(e.which==13){
							$(".btn-simpan-kendaraan").click();
						}
					})
					// end edit kendaraan

					// untuk bagian edit profile
						$('.btn-edit-profile').click(function(){
							$(".name-user, .ttl-user, .alamat-user, .btn-edit-profile").addClass('hide');
							$("#input-name-user, #input-ttl-user, #input-alamat-user").parent().removeClass('hide');			
							$(".btn-simpan-profile").removeClass('hide');			
						});

						$(".btn-simpan-profile").click(function(){
							$("#input-name-user").removeClass('is-invalid');
							$(".invalid-feedback.input-name").html('');
							let inputName = $("#input-name-user").val();
							let inputTtl = $("#input-ttl-user").val();
							let inputAlamat = $("#input-alamat-user").val();
							let email = $('#email').val();			
							if(inputName == ''){
								$('#input-name-user').addClass('is-invalid').focus();
								$(".invalid-feedback.input-name").html('Nama harus diisi');
							}else	if(inputTtl == ''){
								$('#input-ttl-user').addClass('is-invalid').focus();
								$(".invalid-feedback.input-ttl").html('Tanggal Lahir harus diisi');
							}else if(inputAlamat == ''){
								$('#input-alamat-user').addClass('is-invalid').focus();
								$(".invalid-feedback.input-alamat").html('Alamat harus diisi');
							}else{
								$(this).html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);
								updateProfile(email, inputName, inputTtl, inputAlamat);
							}
						});
						$('#input-name-user, #input-ttl-user, #input-alamat-user').keypress(function(e){
							if(e.which==13){
								$(".btn-simpan-profile").click();
							}
						})		
					// end edit profile
	 			} 			
	 		}
		})
	}

</script>



<?= $this->endSection(); ?>