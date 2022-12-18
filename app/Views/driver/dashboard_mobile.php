<?= $this->extend('layout/template-mobile'); ?>
<?= $this->section('content'); ?>
<input type="hidden" id="email" value="<?= session('email_wotle'); ?>" readonly>

    <div id="dashboard-mobile">
        <div class="container">  

            <div class="py-3">
                <a href="/profile" class="text-dark text-decoration-none">
                    <div class="row d-flex align-items-center cursor-pinter">
                        <div class="col-10 d-flex align-items-center">
                            <div class="position-relative hw-100 bg-white rounded-circle p-2 me-3">
                                <img src="https://img.freepik.com/premium-vector/man-avatar-profile-round-icon_24640-14044.jpg?w=2000" alt="" class="of-cover br-50">
                            </div>
                            <div>
                                <div class="h5 my-2 fw-boldtext-center text-wotle name-user"></div>
                                <div class="">Status - <span class="status-user"></span></div>
                            </div>
                        </div>
                        <div class="col-1 text-end cursor-pointer">
                            <i class="fa-solid fa-gear h5"></i>
                        </div>
                    </div>
                </a>
                <!-- <div class="position-relative hw-100 mx-auto border br-50 p-2">
                    <img src="https://img.freepik.com/premium-vector/man-avatar-profile-round-icon_24640-14044.jpg?w=2000" alt="" class="of-cover br-50">
                </div>
                <div class="my-2 fw-bold h5 text-center text-wotle">Driver Wotle</div>
                <div class="status-driver active">
                    Aktif
                </div> -->

                <!-- <div class="my-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 d-flex justify-content-end">
                            <div class="card border-0 br-15" style="width: 8rem;">
                                <div class="card-body text-center">
                                    <div class="fw-bold h5">732</div>
                                    <div>lorem</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="card border-0 br-15" style="width: 8rem;">
                                <div class="card-body text-center">
                                    <div class="fw-bold h5">732</div>
                                    <div>lorem</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-start">
                            <div class="card border-0 br-15" style="width: 8rem;">
                                <div class="card-body text-center">
                                    <div class="fw-bold h5">732</div>
                                    <div>lorem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="my-3">
                    <div class="card br-15 border-0 py-2 px-3 shadow-sm mt-4">
                        <div class="card-body">
                            
                            <div class="mb-3  text-secondary d-flex align-items-center">
								<div class="me-2 position-relative"><img src="/wotle_assets/img/icon/roket.png" alt="" style="width: 20px;"></div> 
								<div class="">Dashboard</div>								
							</div>
                            <div class="class-fdk my-4"></div>

                            <div class="row mt-5">
                                <div class="col-3 ps-3  mb-3 ktp-check text-uppercase"></div>
                                <div class="col-3 ps-3  mb-3 sim-check text-uppercase"></div>
                                <div class="col-3 ps-3  mb-3 stnk-check text-uppercase"></div>
                                <div class="col-3 ps-3  mb-3 skck-check text-uppercase"></div>
                            </div>
                            <div class="mt-4 alert-upload-berkas hide">
                                <div><span class="text-red"><i class="fa-solid fa-triangle-exclamation me-1"></i>Himbauan!</span> Silahkan lengkapi berkas yang diperlukan, agar akun dapat digunakan.</div>
                                <a href="#" class="btn btn-primary-light mt-3">Lengkapi Berkas</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Berkas -->
                <div class="card card-upload-berkas border-0 my-3 shadow-sm br-15 hide">
                    <div class="card-body">
                        <div class=" text-secondary d-flex align-items-center">
                            <div class="me-2 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" style="width: 20px;"></div> 
                            <div class="">Unggah Berkas</div>								
                        </div>
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
                                                <div class="text-end review-KTP mt-2">Preview KTP</div>
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
                                                <div class="text-end review-SIM mt-2">Preview SIM</div>
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
                                                <div class="text-end review-STNK mt-2">Preview STNK</div>
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
                                                <div class="text-end review-SKCK mt-2">Preview SKCK</div>
                                                <div class="br-15 d-flex justify-content-end"><img src="" class="preview-image-skck w-200 br-15"></div>
                                                <div class="small label-image-skck text-end"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary-light">Simpan Berkas</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Upload Berkas -->

                <!-- <div class="list-menu mt-4 shadow-sm">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/profile" class="d-flex py-2 px-3 align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="me-3 position-relative"><img src="/wotle_assets/img/icon/icon-user.png" alt="" class="w-30px"></div>
                                    <div class="me-2">Akun</div>  
                                </div>
                                <div class="text-end"><i class="fa-solid fa-angle-right"></i></div>                              
                            </a>
                        </li>   
                        <li>
                            <a href="/berkas" class="d-flex py-2 px-3 align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="me-3 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" class="w-30px"></div>
                                    <div class="me-2">Berkas</div>                                
                                </div>
                                <div class="text-end"><i class="fa-solid fa-angle-right"></i></div>                              
                            </a>
                        </li>                                                
                        <li>
                            <a href="/berkas" class="d-flex py-2 px-3 align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="me-3 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" class="w-30px"></div>
                                    <div class="me-2">Data Kendaraan</div>                                
                                </div>
                                <div class="text-end"><i class="fa-solid fa-angle-right"></i></div>                              
                            </a>
                        </li>                                                
                    </ul>
                </div> -->

                <!-- Berkas -->
                <?php if(session()->get('role_wotle') == 'driver') : ?>			
					<div class="card border-0 br-15 my-3">
						<div class="card-body px-3">				
                            <div class="mb-3  text-secondary d-flex align-items-center">
								<div class="me-2 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" style="width: 20px;"></div> 
								<div class="">Berkas</div>								
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
				<?php endif; ?>
                <!-- End Berkas -->

                <!-- Data Kendaraan -->
                <div class="card br-15 shadow-sm py-2 px-3 my-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4 align-items-center">
                            <div class="text-secondary d-flex align-items-center">
                                <div class="me-2 position-relative"><img src="/wotle_assets/img/icon/berkas.png" alt="" style="width: 20px;"></div> 
                                <div class="">Data Kendaraan</div>								
                            </div> 
                            <div class="d-flex justify-content-between">
                                <input type="hidden" name="id_driver" id="id-user">
                                <button class="btn btn-primary-light btn-sm  btn-edit-kendaraan hide"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</button>
                                <div class="card-btn-kendaraan hide">
                                    <div class="d-flex">
                                        <button class="btn btn-wotle btn-sm  btn-simpan-kendaraan hide me-2">Simpan</button>
                                        <button class="btn btn-danger btn-sm  btn-back-simpan-kendaraan hide">Batal</button>
                                    </div>
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
                <!-- End Data Kendaraan -->

                <a href="/logout" class="d-flex py-3 px-3 align-items-center mt-5 btn btn-wotle justify-content-center">
                    <!-- <div class="me-3 position-relative"><img src="/wotle_assets/img/icon/signout.png" alt="" class="w-25px"></div> -->
                    <div class="me-2">Keluar</div>                                
                </a>
            </div>
        </div>
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
    <!-- End Modal Lihat Gambar -->

    <script> 
        $(document).ready(function(){
            let email = $('#email').val();
            getProfile(email);
        })

        // untuk modal lihat gambar
        $('.assets-driver').click(function(){
            $("img.lihat-gambar").attr('src','');
            let getSrc = $(this).attr('src');
            $("img.lihat-gambar").attr('src',getSrc);
	    })
        // end modal lihat gambar
    </script>
<?= $this->endSection(); ?>    





