<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="d-flex">
	<?= $this->include('layout/sidebar-driver'); ?>

	<div id="content-driver">
		<div class="container">
			<div>
				<input type="hidden" id="kategori-halaman" value="dashboard-driver">
				<input type="hidden" id="email" value="<?= session()->get('email_wotle'); ?>">
				<input type="hidden" id="role" value="<?= session()->get('role_wotle'); ?>">
				<input type="hidden" id="id-user" value="">
                <div class="h4 fw-bold">Halo <span class="nama-user"></span></div>
                <div class="pb-3 border-bottom">Selamat datang, semoga hari mu selalu menyenangkan!</div>

                <div class="my-3 profile-dashboard hide">
                	<div class="row">
                		<div class="col-lg-6">
		                	<div class="card border-0 br-15">
		                		<div class="card-body">
		                			<div class="text-center">
		                				<div class="mb-2">Saldo</div>
		                				<div class="fw-bold h4 color-wotle">Rp 500.000</div>

		                				<div class="mt-4">
		                					<div class="mb-2">Rating</div>
		                					<div>
	                							<?php for($i=1; $i<=5; $i++) : ?>
		        									<i class="fa-solid fa-star text-orange me-1 h4"></i>
		        								<?php endfor; ?>
		                					</div>
		                				</div>
		                			</div>		                			
		                		</div>
		                	</div>                			
                		</div>
                		<div class="col-lg-6">
                			<div class="mb-3">Ulasan Pelanggan</div>
                			<div class="card border-0 br-15">
                				<div class="card-body">
                					<div class="row">
                						<div class="col-2">
                							<div class="w-xy-40 br-50 mx-auto">
                								<img src="/wotle_assets/img/foto/foto.webp" alt="" class="object-fit-cover br-50">
                							</div>
                						</div>
                						<div class="col-10">
		        							<div class="fw-bold">Nicky Minaz</div>
		        							<div class="text-muted small">1 hari yang lalu</div>
                						</div>
                					</div>
        							<div class="alert bg-content p-3 mt-3 border-0">
        								Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est eaque ducimus ut a odit ad neque enim, provident repellendus nemo numquam commodi voluptate obcaecati deserunt dolorem facilis earum, deleniti quia quasi, facere. Iste, repellendus nesciunt, dignissimos molestiae et debitis.
        							</div>
        							<div class="mt-2">
        								<?php for($i=1; $i<=5; $i++) : ?>
        									<i class="fa-solid fa-star text-orange me-1"></i>
        								<?php endfor; ?>
        							</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>

                <div class="lengkapi-data hide">
                	<div class="mt-3">
	                	<div class="alert alert-warning">Status anda saat ini <span class="fw-bold">belum aktif</span>, silahkan isi data diri dan kendaraan terlebih dahurlu</div>
	                </div>           
		            <div class="mt-4">
		            	<div class="row">
		            		<div class="col-lg-6">
				            	<div class="card mb-4 border-0 br-15">
				            		<div class="card-body">
				            			<div class="mb-4">Lengkapi data diri yuk</div>
										<form action="post" enctype="multipart/form-data" class="form-tambah-data-diri">
											<div class="mb-3">
											    <label for="alamat" class="col-form-label">Alamat</label>
											    <div class="">
											      <input type="text" class="form-control" id="alamat">
											    </div>
											</div>
											<div class="mb-3">
											    <label for="ttl" class="col-form-label">Tanggal Lahir</label>
											    <div class="">
											      <input type="date" class="form-control" id="ttl">
											    </div>
											</div>
											<div class="mb-3">
											    <label for="no_darurat" class="col-form-label">Nomor Darurat</label>
											    <div class="">
											      <input type="text" class="form-control" id="no_darurat">
											    </div>
											</div>											
										</form>
										<div class="mt-4">
											<button class="btn btn-sm btn-lime w-100 btn-simpan-profile">Simpan data diri</button>
										</div>
				            		</div>
				            	</div>            		
		            		</div>
		            		<div class="col-lg-6">
		            			<div class="card mb-4 border-0 br-15">
				            		<div class="card-body">
				            			<div class="mb-4">Data kendaraan juga belum lengkap</div>
					        			<form action="post" class="form-tambah-data-kendaraan">
					        				 <div class="mb-3">
											    <label for="tipe_kendaraan" class="col-form-label">Tipe Kendaraan</label>
											    <div class="">
											      <input type="text" class="form-control" id="tipe_kendaraan" name="tipe_kendaraan">
											    </div>
											</div>
											<div class="mb-3">
											    <label for="plat_nomor" class="col-form-label">Plat Nomor</label>
											    <div class="">
											      <input type="text" class="form-control" id="plat_nomor" name="plat_nomor">
											    </div>
											</div>
					        			</form>
										<div class="mt-2">
											<button type="button" class="btn btn-sm btn-lime w-100 btn-simpan-kendaraan">Simpan data kendaraan</button>
										</div>
				            		</div>
				            	</div>
		            		</div>

		            		<div class="col-lg-6">
		            			<form action="uploadFileDriver" method="post" enctype="multipart/form-data">		            				
		            				<input type="hidden" name="id-user" value="" class="input-id-user">
		            				<?= csrf_field(); ?>		            				
			            			<div class="card border-0 br-15">
			            				<div class="card-body">
			            					<div class="">
			            						<div class="my-4">
			            							<?php if(session()->getFlashdata('message')) :  ?>
			            								<div class="alert alert-warning"><?= session()->getFlashdata('message'); ?></div>
			            							<?php endif;; ?>
			            						</div>
												<div class="row border-bottom pb-3">
													<div class="col-lg-4">
													    <div for="file_ktp" class="col-form-label">Foto KTP</div>
													    <div class="btn btn-sm btn-light border pilih-file-dokumen-driver" data-kategori="ktp">pilih file</div>
													    <div class="hide">
													      	<input type="file" class="form-control" id="file_ktp" name="file_ktp" class="">
													    </div>												
													</div>
													<div class="col-lg-8 small">
														<div class="text-end review-KTP">Preview KTP</div>
														<div class="br-15 d-flex justify-content-end"><img src="" class="preview-image-ktp w-200 br-15"></div>
														<div class="small label-image-ktp text-end"></div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row border-bottom pb-3">
													<div class="col-lg-4">
													    <div for="file_sim" class="col-form-label">Foto SIM</div>
													    <div class="btn btn-sm btn-light border pilih-file-dokumen-driver" data-kategori="sim">pilih file</div>
													    <div class="hide">
													      	<input type="file" class="form-control" id="file_sim" name="file_sim" class="">
													    </div>												
													</div>
													<div class="col-lg-8 small">
														<div class="text-end review-SIM">Preview SIM</div>
														<div class="br-15 d-flex justify-content-end"><img src="" class="preview-image-sim w-200 br-15"></div>
														<div class="small label-image-sim text-end"></div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row border-bottom pb-3">
													<div class="col-lg-4">
													    <div for="file_stnk" class="col-form-label">Foto STNK</div>
													    <div class="btn btn-sm btn-light border pilih-file-dokumen-driver" data-kategori="stnk">pilih file</div>
													    <div class="hide">
													      	<input type="file" class="form-control" id="file_stnk" name="file_stnk" class="">
													    </div>												
													</div>
													<div class="col-lg-8 small">
														<div class="text-end review-STNK">Preview STNK</div>
														<div class="br-15 d-flex justify-content-end"><img src="" class="preview-image-stnk w-200 br-15"></div>
														<div class="small label-image-stnk text-end"></div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="row border-bottom pb-3">
													<div class="col-lg-4">
													    <div for="file_skck" class="col-form-label">Foto SKCK</div>
													    <div class="btn btn-sm btn-light border pilih-file-dokumen-driver" data-kategori="skck">pilih file</div>
													    <div class="hide">
													      	<input type="file" class="form-control" id="file_skck" name="file_skck" class="">
													    </div>												
													</div>
													<div class="col-lg-8 small">
														<div class="text-end review-SKCK">Preview SKCK</div>
														<div class="br-15 d-flex justify-content-end"><img src="" class="preview-image-skck w-200 br-15"></div>
														<div class="small label-image-skck text-end"></div>
													</div>
												</div>
											</div>

											<div class="mt-4">
												<button type="submit" class="btn btn-lime w-100 btn-sm">Simpan Berkas</button>
											</div>
			            				</div>
			            			</div>
		            			</form>
		            		</div>
		            	</div>                       
		            </div>
                </div>
            </div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function(){
		let email = $('#email').val();
		let role = $('#role').val();	
		getDriver(email);

		$('.btn-simpan-kendaraan').click(function(){
			let tipe_kendaraan = $('#tipe_kendaraan').val();
			let plat_nomor = $('#plat_nomor').val();
			let id = $('#id-user').val();
			updateKendaraan(id,tipe_kendaraan,plat_nomor);
		})		
		$('#tipe_kendaraan, #plat_nomor').keypress(function(e){
			if(e.which==13){
				$('.btn-simpan-kendaraan').click();
			}
		})
		$('.btn-simpan-profile').click(function(){
			let email = $('#email').val();
			let nama = '';
			let ttl = $('#ttl').val();
			let alamat = $('#alamat').val();
			let no_darurat = $('#no_darurat').val();
			updateProfile(email, nama, ttl, alamat, no_darurat);			
		})
	})	
</script>


<?= $this->endSection(); ?>