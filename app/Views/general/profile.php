<?= $this->extend('layout/template-mobile'); ?>
<?= $this->section('content'); ?>
<input type="hidden" id="email" value="<?= session('email_wotle'); ?>" readonly>
<input type="hidden" id="kategori-halaman" value="profile">

	<div id="dashboard-mobile">
		<div class="container py-3">			
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
				<div class="col-2 cursor-pointer">
					<!-- <i class="fa-solid fa-edit me-2"></i> Edit -->
				</div>
			</div>			
			

			<div class="card border-0 br-20 my-4">
				<div class="card-body">	
					<div class="text-secondary d-flex align-items-center pb-3 border-bottom">
						<div class="me-2 position-relative"><img src="/wotle_assets/img/icon/icon-user.png" alt="" style="width: 25px;"></div> 
						<div class="fw-bold">Akun Saya</div>								
					</div> 									
					<div class="">
						<div class="mt-4">							
							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-user me-2 text-muted fa-fw"></i>Nama</div>
								<div class="col-6 text-end name-user click-none"></div>							
							</div>
							<div class="mb-2 hide">
								<input type="text" name="name-user" id="input-name-user" class="border-0 border-bottom shadow-none text-wotle form-control">
								<div class="invalid-feedback input-name"></div>
							</div>				

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-envelope me-2 text-muted fa-fw"></i>Email</div>
								<div class="col-6 text-end email-user"></div>							
							</div>

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-chart-pie me-2 text-muted fa-fw"></i>Level</div>
								<div class="col-6 text-end role-user text-uppercase"></div>
							</div>

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-calendar-days me-2 fa-fw text-muted"></i>Tanggal Lahir</div>
								<div class="ttl-user col-6 text-end"></div>
								<div class="mb-2 hide">
									<input type="date" name="ttl-user" id="input-ttl-user" class="border-0 border-bottom shadow-none text-wotle form-control">
									<div class="invalid-feedback input-ttl"></div>
								</div>				
							</div>

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-location-dot me-2 fa-fw text-muted"></i>Alamat</div>
								<div class="alamat-user col-6 text-end"></div>
								<div class="mb-2 hide">
									<input type="text" name="alamat-user" id="input-alamat-user" class="border-0 border-bottom shadow-none text-wotle form-control">
									<div class="invalid-feedback input-alamat"></div>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-phone me-2 fa-fw text-muted"></i>Nomor Handphone</div>
								<div class="no-hp col-6 text-end"></div>
								<div class="mb-2 hide">
									<input type="text" name="no-hp" id="input-no-hp" class="border-0 border-bottom shadow-none text-wotle form-control">
									<div class="invalid-feedback input-alamat"></div>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-6"><i class="fa-solid fa-phone me-2 fa-fw text-muted"></i>Nomor Darurat</div>
								<div class="no-darurat col-6 text-end"></div>
								<div class="mb-2 hide">
									<input type="text" name="no-darurat" id="input-no-darurat" class="border-0 border-bottom shadow-none text-wotle form-control">
									<div class="invalid-feedback input-alamat"></div>
								</div>
							</div>

							<div class="mt-4 mb-3">
								<button class="btn btn-primary-light px-4 btn-sm  btn-edit-profile">Edit Profile</button>
								<button class="btn btn-wotle btn-sm  btn-simpan-profile w-100 hide">Simpan</button>
								<button class="btn btn-danger btn-sm  btn-batal-simpan-profile w-100 hide mt-3">Batal</button>
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
		getProfile(email);	
	})		
</script>



<?= $this->endSection(); ?>