<?php 
include "../config/koneksi.php";

?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Pemilik</h2>
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
	  <span class="input-group-text">Pemilik</span>
	  </div>
			<input type="text" name="pemilik" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kantor</span>
	  </div>
			<input type="text" name="kantor" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat Kantor</span>
	  </div>
			<input type="text" name="alamat_kantor" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email Kantor</span>
	  </div>
			<input type="text" name="email_kantor" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Telpon Kantor</span>
	  </div>
			<input type="text" name="telpon_kantor" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Negara</span>
	  </div>
			<input type="text" name="negara" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kontak Pemilik</span>
	  </div>
			<input type="text" name="kontak_pemilik" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Email Pemilik</span>
	  </div>
			<input type="text" name="email_pemilik" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Masuk</span>
	  </div>
			<input type="date" name="masuk" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keluar</span>
	  </div>
			<input type="date" name="keluar" class="form-control" >
			</div>
			
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
			$no_unit = @$_POST['no_unit'];
			$pemilik = @$_POST['pemilik'];
			$kantor = @$_POST['kantor'];
			$alamat_kantor = @$_POST['alamat_kantor'];
			$email_kantor = @$_POST['email_kantor'];
			$telpon_kantor = @$_POST['telpon_kantor'];
			$negara = @$_POST['negara'];
			$kontak_pemilik = @$_POST['kontak_pemilik'];
			$email_pemilik = @$_POST['email_pemilik'];
			$masuk = @$_POST['masuk'];
			$keluar = @$_POST['keluar'];
			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($no_unit == "" || $pemilik == "" || $kantor == "" || $alamat_kantor == "" || $email_kantor == "" || $telpon_kantor == "" || $negara == "" || $kontak_pemilik == "" || $email_pemilik == "" || $masuk == "" || $keluar == ""){
					?>
						<script type="text/javascript">
							alert("Inputan tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into tb_pemilik values('$no_unit','$pemilik','$kantor','$alamat_kantor','email_kantor','$telpon_kantor','$negara','$kontak_pemilik','$email_pemilik','$masuk','$keluar')");
					?>
						<script type="text/javascript">
							alert("Data berhasil Ditambah");
							window.location.href="?page=data_pemilik";
						</script>
					<?php
				}
			}
		 ?>
	</div>
</div>