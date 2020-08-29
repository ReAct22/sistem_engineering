<?php 
	$idke = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_ke where id_ke = '$idke'");
	$data = mysqli_fetch_array($sql);
?>
<div class="card-body">
	<h2>Input data Karyawaan Engineering</h2>
	<br>
	<form action="" method="post" enctype="multipart/form-data" class="form-group">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Id Karyawaan</span>
	  </div>
	  		<input type="text" name="no_ke" disabled="disabled" value="<?php echo $data['id_ke'] ?>" class="form-control">
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Karyawaan</span>
	  </div>
	  		<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat</span>
	  </div>
	  		<textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat'] ?></textarea>
		</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jabatan</span>
	  </div>
	  		<input type="text" name="jabatan" value="<?php echo $data['jabatan'] ?>" class="form-control">
		</div>
		<input type="submit" name="edit" class="btn btn-md btn-success" value="Update">
		<input type="reset" name="" value="Cancel" class="btn btn-md btn-danger">
	</form>
	<?php 
	$nama = @$_POST['nama'];
	$alamat = @$_POST['alamat'];
	$jabatan = @$_POST['jabatan'];
	$edit_data = @$_POST['edit'];
	if($edit_data){
			mysqli_query($koneksi,"update tb_ke set nama = '$nama',
			 alamat = '$alamat', 
			 jabatan = '$jabatan' where id_ke = '$idke'");
			?>
				<script type="text/javascript">
					alert("Update data Success");
					window.location.href="?page=data_ke";
				</script>
			<?php
	} 
	?>
</div>