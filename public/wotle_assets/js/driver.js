// Upload Berkas
$('.pilih-file-dokumen-driver').click(function(){
    let kategori = $(this).data('kategori');
    $('#file_'+kategori).click();
    $('#file_'+kategori).change(function(){
        let imgPreview = '.preview-image-'+kategori;            
        let imageLabel = '.label-image-'+kategori;            
        let fileImg = '#file_'+kategori;                                    
        imagePreview(fileImg,imgPreview,imageLabel);
    })
})


function imagePreview(fileImg,imgPreview,imageLabel) {        
    let fileImage = document.querySelector(fileImg);
    let imagePreview = document.querySelector(imgPreview);
    let label = document.querySelector(imageLabel);

    label.textContent = fileImage.files[0].name;
    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(fileImage.files[0]);
    fileSampul.onload = function(e) {
        imagePreview.src = e.target.result;
    }
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
                    //  $('.img-user').attr('src','/wotle_assets/img/foto/foto.webp');
                     $('.name-user').html(profile.nama); 				
                     $('#input-name-user').val(profile.nama); 				
                     $(".email-user").html(profile.email);
                     $(".ttl-user").html(profile.ttl);
                     $("#input-ttl-user").val(profile.ttl);
                     $('.alamat-user').html(profile.alamat);
                     $("#input-alamat-user").val(profile.alamat);	 				
                     $('.alamat-user').html(profile.alamat);
                     $("#input-alamat-user").val(profile.alamat);	 				
                     $('.no-hp').html(profile.no_hp);
                     $("#input-no-hp").val(profile.no_hp);	 				
                     $('.no-darurat').html(profile.no_darurat);
                     $("#input-no-darurat").val(profile.no_darurat);	 				

                     console.log(profile)



                     $('.merk-mobil').html(": "+profile.tipe_kendaraan);
                     $('#input-merk-mobil').val(profile.tipe_kendaraan);
                     $('.plat-nomor').html(": "+profile.plat_nomor);
                     $('#input-plat-nomor').val(profile.plat_nomor);


                     let skorktp, skorsim, skorstnk, skorskck;
                    if(profile.ktp == ''){
                        $('.ktp-check').html(`<i class="fa-solid fa-circle-xmark me-2 text-red"></i>KTP`);
                        skorktp = 0;
                    }else{
                        $('.ktp-check').html(`<i class="fa-solid fa-circle-check me-2 text-lime"></i>KTP`);
                        $('.img-file-ktp').attr('src', profile.ktp);
                        skorktp = 25;
                    }                     
                    if(profile.sim == ''){
                        $('.sim-check').html(`<i class="fa-solid fa-circle-xmark me-2 text-red"></i>sim`);
                        skorsim = 0;
                    }else{
                        $('.sim-check').html(`<i class="fa-solid fa-circle-check me-2 text-lime"></i>sim`);
                        $('.img-file-sim').attr('src', profile.sim);
                        skorsim = 25;
                    }                     
                    if(profile.stnk == ''){
                        $('.stnk-check').html(`<i class="fa-solid fa-circle-xmark me-2 text-red"></i>stnk`);
                        skorstnk = 0;
                    }else{
                        $('.stnk-check').html(`<i class="fa-solid fa-circle-check me-2 text-lime"></i>stnk`);
                        $('.img-file-stnk').attr('src', profile.stnk);
                        skorstnk = 25;
                    }                     
                    if(profile.skck == ''){
                        $('.skck-check').html(`<i class="fa-solid fa-circle-xmark me-2 text-red"></i>skck`);
                        skorskck = 0;
                    }else{
                        $('.skck-check').html(`<i class="fa-solid fa-circle-check me-2 text-lime"></i>skck`);
                        $('.img-file-skck').attr('src', profile.skck);
                        skorskck = 25;
                    }                     

                    let skorBerkas = (skorktp + skorsim + skorskck + skorstnk);
                    if(skorBerkas < 100){
                        $('.alert-upload-berkas, .card-upload-berkas').removeClass('hide')                                                
                    }else{
                    }
                    
                    $('.class-fdk ').html(skorBerkas+'% Lengkap').css('background','linear-gradient(to right, purple '+skorBerkas+'%, lightblue)');





                     $('.img-file-sim').attr('src', profile.sim);
                     $('.img-file-stnk').attr('src', profile.stnk);
                     $('.img-file-skck').attr('src', profile.skck);

                     $('.role-user').html(profile.role)
                     $('#id-user').val(profile.id);		 				
                     if(profile.status == 'aktif'){ 					
                         $('.status-user').html('Aktif');
                     }else if(profile.status == 'nonaktif'){
                         $('.status-user').html('Non Aktif'); 					
                     }else if(profile.status == 'ditangguhkan'){
                         $('.status-user').html('Ditangguhkan'); 					
                     }else{
                         $('.status-user').html('no status'); 							 					
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
							$(".name-user.click-none-, .ttl-user, .alamat-user, .btn-edit-profile").addClass('hide');
							$("#input-name-user_, #input-ttl-user, #input-alamat-user").parent().removeClass('hide');			
							$(".btn-simpan-profile, .btn-batal-simpan-profile").removeClass('hide');			
						});
						$('.btn-batal-simpan-profile').click(function(){
							$(".name-user, .ttl-user, .alamat-user, .btn-edit-profile").removeClass('hide');
							$("#input-name-user, #input-ttl-user, #input-alamat-user").parent().addClass('hide');			
							$(".btn-simpan-profile, .btn-batal-simpan-profile").addClass('hide');			
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
                $(".btn-edit-kendaraan").html("Data berhasil diubah").removeClass('btn-primary-light').addClass("btn-warning");
                $("#input-merk-mobil,#input-plat-nomor").parent().addClass('hide');
                $.each(result.kendaraan, function(i, kendaraan){ 						 				
                     $('.merk-mobil').html(": "+kendaraan.tipe_kendaraan);
                     $('#input-merk-mobil').val(kendaraan.tipe_kendaraan);
                     $('.plat-nomor').html(": "+kendaraan.plat_nomor);
                     $('#input-plat-nomor').val(kendaraan.plat_nomor);		 						 			
                 })

                 setTimeout(function(){
                    $(".btn-edit-kendaraan").html('<i class="fa-solid fa-pen-to-square me-2"></i>Edit').removeClass('btn-warning').addClass('btn-primary-light');
                 },4000);
            }
        }
    })
}

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
            $(".btn-batal-simpan-profile").addClass("hide");
            $(".name-user, .ttl-user, .alamat-user, .btn-edit-profile").removeClass('hide');
            $("#input-name-user, #input-ttl-user, #input-alamat-user").parent().addClass('hide');			
            getProfile(email);
            $(".btn-edit-profile").html('Data profile berhasil diubah').removeClass('btn-primary-light').addClass('btn-warning');
            setTimeout(function(){
                $(".btn-edit-profile").html('Edit profile').removeClass('btn-warning').addClass('btn-primary-light');
            },3000);
        }
    })
}