<div class="card-body">
	<h2>Input data Karyawaan Engineering</h2>
	<br>
	<form action="" method="post" enctype="multipart/form-data" class="form-group">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Id Karyawaan</span>
	  </div>
	  		<input type="text" name="no_ke" class="form-control">
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Karyawaan</span>
	  </div>
	  		<input type="text" name="nama" class="form-control">
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat</span>
	  </div>
	  		<textarea class="form-control" rows="3" name="alamat"></textarea>
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jabatan</span>
	  </div>
	  		<input type="text" name="jabatan" class="form-control">
		</div>
		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Tambah">
		<input type="reset" name="" class="btn btn-md btn-danger">
	</form>
	<?php 
	$no_ke = @$_POST['no_ke'];
	$nama = @$_POST['nama'];
	$alamat = @$_POST['alamat'];
	$jabatan = @$_POST['jabatan'];
	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
		if($no_ke == "" || $nama == "" || $alamat == "" || $jabatan == ""){
			?>
				<script type="text/javascript">
					alert("Inputan tidak boleh kosong");
				</script>
			<?php
		}else{
			mysqli_query($koneksi,"insert into tb_ke values('$no_ke','$nama','$alamat','$jabatan')");
			?>
				<script type="text/javascript">
					alert("Data Berhasil Ditamabahkan");
					window.location.href="?page=data_ke";
				</script>
			<?php
		}
	} 
	?>
</div>