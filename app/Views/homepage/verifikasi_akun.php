<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<input type="text" id="email" value="<?= $email; ?>">
<input type="text" id="token" value="<?= $token; ?>">

<script>
	$(document).ready(function(){
		let email = $('#email').val();
		let token = $('#token').val();

		$.ajax({
			url : 'http://localhost/apiwotle2/verifikasiAkun',
			type : 'post',
			dataType : 'json',
			data : {
				email : email,
				token : token,
			},
			success : function(result){

			}
		})
	})
</script>

<?= $this->endSection(); ?>