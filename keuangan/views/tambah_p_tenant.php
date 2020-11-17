<?php 
include "../config/koneksi.php";

?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Penanggung Jawab Tenant</h2>
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
	  <span class="input-group-text">Nama PJTN</span>
	  </div>
			<input type="text" name="nama_pjtn" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kontak PJTN</span>
	  </div>
			<input type="text" name="kontak_pjtn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email PJTN</span>
	  </div>
			<input type="text" name="email_pjtn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kantor PJTN</span>
	  </div>
			<input type="text" name="kantor_pjtn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Status PJTN</span>
	  </div>
			<input type="text" name="status_pjtn" class="form-control" >
			</div>
			
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
			$no_unit = @$_POST['no_unit'];
			$nama_pjtn = @$_POST['nama_pjtn'];
			$kontak_pjtn = @$_POST['kontak_pjtn'];
			$email_pjtn = @$_POST['email_pjtn'];
			$kantor_pjtn = @$_POST['kantor_pjtn'];
			$status_pjtn = @$_POST['status_pjtn'];
			$tambah_data = @$_POST["tambah"];
			if($tambah_data){
				if($no_unit == "" || $nama_pjtn == "" || $kontak_pjtn == "" || $email_pjtn == "" || $kantor_pjtn == "" || $status_pjtn == ""){
					?>
						<script type="text/javascript">
							alert("Inputan tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into tb_pjtn values('$no_unit','$nama_pjtn','$kontak_pjtn','$email_pjtn','$kantor_pjtn','$status_pjtn')");
					?>
						<script type="text/javascript">
							alert("Input Data berhasil");
							window.location.href="?page=data_p_tenant";
						</script>
					<?php
				}
			}
		?>
	</div>
</div>