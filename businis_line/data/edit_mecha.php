<?php 
	include "config/koneksi.php";
?>
<div class="card-body">
	<h2>Input data PM ELEKTRICAL</h2>
	<?php 
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_mecha where id_mecha = '$id'");
	$data = mysqli_fetch_array($sql);
	?>
	<form action="" method="post" class="form-group" enctype="multipart/form-data">
	  <div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. PM Elektrical</span>
	  </div>
		<input type="text" name="no_pmelektrik" class="form-control" value="<?php echo $data['id_mecha'] ?>">
	</div>
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Select Periode Previntif</span>
	  </div>
		<select name="periode" class="form-control">
			<option value="3 bulan">3 bulan</option>
			<option value="6 bulan">6 bulan</option>
			<option value="1 tahun">1 tahun</option>
		</select>
	</div>
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Utilitas</span>
	  </div>
		<select name="nama" class="form-control">
			<option label="Pilih Lokasi">Pilih Utilitas</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_elektrical");
			while($data = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $data['nama_utilitas'] ?>"><?php echo $data['nama_utilitas'] ?></option>
			<?php 
				}
			?>
		</select>
	</div>
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi Utilitas</span>
	  </div>
		<select name="lokasi" class="form-control">
			<option label="Pilih Lokasi">Pilih Lokasi</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_elektrical");
			while($data = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $data['lokasi_utilitas'] ?>"><?php echo $data['lokasi_utilitas'] ?></option>
			<?php 
				}
			?>
		</select>
	</div>
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Rencana Perkerjaan</span>
	  </div>
		<input type="date" name="rencana" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Realisasi Perkerjaan</span>
	  </div>
	  <input type="date" name="realisasi" class="form-control">
	</div>
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Realisasi Perkerjaan</span>
	  </div>
	  <input type="file" name="gambar" class="form-control">
	</div>

	<input type="submit" name="edit" class="btn btn-md btn-success">
	<input type="reset" name="" class="btn btn-md btn-danger">
	</form>
	<?php 
	$periode = @$_POST['periode'];
	$nama = @$_POST['nama'];
	$lokasi = @$_POST['lokasi'];
	$rencana = @$_POST['rencana'];
	$realisasi = @$_POST['realisasi'];

	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = 'assets/img/';
	$nama_gambar = @$_FILES['gambar']['name'];

	$edit_data = @$_POST['edit'];

	if($edit_data){
			if($nama_gambar == ""){
				mysqli_query($koneksi,"update pm_mecha set periode = '$periode', nama_utilitas = '$nama', lokasi_utilitas = '$lokasi', rencana = '$rencana', realisasi = '$realisasi' where id_mecha = '$id'");
				?>
				<script type="text/javascript">
					alert("update data berhasil");
					window.location.href="?page=pm_mecha";
				</script>
				<?php
			}else{
				$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				mysqli_query($koneksi,"update pm_mecha set periode = '$periode', nama_utilitas = '$nama', lokasi_utilitas = '$lokasi', rencana = '$rencana', realisasi = '$realisasi', gambar = '$nama_gambar' where id_mecha = '$id'");
				?>
					<script type="text/javascript">
						alert("Data berhasi di tambahkan");
						window.location.href="?page=pm_mecha";
					</script>
				<?php
			}else{
				?>
					<script type="text/javascript">
						alert("Gambar gagal diUpload");
					</script>
				<?php
			}

			}
			
		}
	?>
</div>