<?php 
include "../config/koneksi.php";

?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Penanggung Jawab Pemilik</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No.Unit</span>
	  </div>
			<input type="text" name="no_unit" class="form-control" value="">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Penanggung Jawab</span>
	  </div>
			<input type="text" name="nama_pjp" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kontak Penanggung Jawab</span>
	  </div>
			<input type="text" name="kontak_pjp" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email Penanggung Jawab</span>
	  </div>
			<input type="text" name="email_pjp" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kantor Penanggung Jawab</span>
	  </div>
			<input type="text" name="kantor_pjp" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Status Penanggung Jawab</span>
	  </div>
			<input type="text" name="status_pjp" class="form-control" >
			</div>
			
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
			$no_unit = @$_POST['no_unit'];
			$nama_pjp = @$_POST['nama_pjp'];
			$kontak_pjp = @$_POST['kontak_pjp'];
			$email_pjp = @$_POST['email_pjp'];
			$kantor_pjp = @$_POST['kantor_pjp'];
			$status_pjp = @$_POST['status_pjp'];
			$tambah_data = @$_POST["tambah"];
			if($tambah_data){
				if($no_unit == "" || $nama_pjp == "" || $kontak_pjp == "" || $email_pjp == "" || $kantor_pjp == "" || $status_pjp == ""){
					?>
						<script type="text/javascript">
							alert("Inputan tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into tb_pjp values('$no_unit','$nama_pjp','$kontak_pjp','$email_pjp','$kantor_pjp','$status_pjp')");
					?>
						<script type="text/javascript">
							alert("Input Data berhasil");
							window.location.href="?page=data_p_pemilik";
						</script>
					<?php
				}
			}
		?>
	</div>
</div>