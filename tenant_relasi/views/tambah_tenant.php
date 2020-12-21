<?php 
include "../config/koneksi.php";

?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Tenant</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Unit TN</span>
	  </div>
			<input type="text" name="unit_tn" class="form-control" value="">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama TN</span>
	  </div>
			<input type="text" name="nama_tn" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kantor TN</span>
	  </div>
			<input type="text" name="kantor_tn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat Kantor TN</span>
	  </div>
			<input type="text" name="alamat_kantor_tn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email Kantor TN</span>
	  </div>
			<input type="text" name="email_kantor_tn" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Telpon Kantor TN</span>
	  </div>
			<input type="text" name="telpon_kantor_tn" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Negara TN</span>
	  </div>
			<input type="text" name="negara_tn" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kontak Pemilik TN</span>
	  </div>
			<input type="text" name="kontak_tn" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email Pemilik TN</span>
	  </div>
			<input type="text" name="email_tn" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Masuk TN</span>
	  </div>
			<input type="date" name="masuk_tn" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keluar TN</span>
	  </div>
			<input type="date" name="keluar_tn" class="form-control" >
			</div>
			
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
			$unit_tn = @$_POST['unit_tn'];
			$nama_tn = @$_POST['nama_tn'];
			$kantor_tn = @$_POST['kantor_tn'];
			$alamat_kantor_tn = @$_POST['alamat_kantor_tn'];
			$email_kantor_tn = @$_POST['email_kantor_tn'];
			$telpon_kantor_tn = @$_POST['telpon_kantor_tn'];
			$negara_tn = @$_POST['negara_tn'];
			$kontak_tn = @$_POST['kontak_tn'];
			$email_tn = @$_POST['email_tn'];
			$masuk_tn = @$_POST['masuk_tn'];
			$keluar_tn = @$_POST['keluar_tn'];
			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($unit_tn == "" || $nama_tn == "" || $kantor_tn == "" || $alamat_kantor_tn == "" || $email_kantor_tn == "" || $telpon_kantor_tn == "" || $negara_tn == "" || $kontak_tn == "" || $email_tn == "" || $masuk_tn == "" || $keluar_tn == ""){
					?>
						<script type="text/javascript">
							alert("Inputan tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into d_tenant values('$unit_tn','$nama_tn','$kantor_tn','$alamat_kantor_tn','email_kantor_tn','$telpon_kantor_tn','$negara_tn','$kontak_tn','$email_tn','$masuk_tn','$keluar_tn')");
					?>
						<script type="text/javascript">
							alert("Data berhasil Ditambah");
							window.location.href="?page=data_tenant";
						</script>
					<?php
				}
			}
		 ?>
	</div>
</div>