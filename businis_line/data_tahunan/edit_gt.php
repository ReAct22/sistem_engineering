<?php

	$idgt = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_gt where id_gt = '$idgt'");
	$data = mysqli_fetch_array($sql);
?>
<div class="card-body">
	<h2>Input data ROOF TANK</h2>
	<form action="" method="post" enctype="multipart/form-data" class="form-group">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Unit</span>
	  </div>
	  	<input type="text" name="no_pm" disabled="disabled" value="<?php echo $data['id_gt'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Preventif</span>
	  </div>
	  <select name="periode" class="form-control">
	  	<option><?php echo $data['periode'] ?></option>
	  	<option value="Tahunan">1 Tahun</option>
	  </select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Utilitas</span>
	  </div>
			<input type="text" name="nama_utilitas" value="<?php echo $data['nama_utilitas'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi Utilitas</span>
	  </div>
			<select name="lokasi_utilitas" class="form-control">
				<option><?php echo $data['lokasi_utilitas'] ?></option>
				<option value="Tower A">Tower A</option>
				<option value="Tower B">Tower B</option>
			</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Rencana Perkerjaan</span>
	  </div>
			<input type="date" name="rencana" value="<?php echo $data['rencana'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Realisasi Perkerjaan</span>
	  </div>
			<input type="date" name="realisasi" value="<?php echo $data['realisasi'] ?>" class="form-control">
		</div>


		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
			<input type="text" name="nama_teknisi" value="<?php echo $data['nama_teknisi'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jenis Perkerjaaan</span>
	  </div>
			<input type="text" name="jenis_kerjaan" value="<?php echo $data['jenis_kerjaan'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Upload Gambar</span>
	  </div>
			<input type="file" name="gambar"  class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Rekomendasi</span>
	  </div>
			<input type="text" name="rekomendasi" value="<?php echo $data['rekomendasi'] ?>" class="form-control">
		</div>
		<input type="submit" name="edit" class="btn btn-md btn-success">
		<input type="reset" class="btn btn-md btn-danger" name="">
	</form>

	<?php 
	$periode = @$_POST['periode'];
	$nama_utilitas = @$_POST['nama_utilitas'];
	$lokasi_utilitas = @$_POST['lokasi_utilitas'];
	$rencana = @$_POST['rencana'];
	$realisasi = @$_POST['realisasi'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$jenis_kerjaan = @$_POST['jenis_kerjaan'];

	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = '../assets/img/';
	$nama_gambar = @$_FILES['gambar']['name'];

	$rekomendasi = @$_POST['rekomendasi'];
	$edit_data = @$_POST['edit'];
	if($edit_data){
		if($nama_gambar == ""){
			mysqli_query($koneksi,"update pm_gt set periode = '$periode', 
					nama_utilitas = '$nama_utilitas',
					lokasi_utilitas = '$lokasi_utilitas', 
					rencana = '$rencana', 
					realisasi = '$realisasi', 
					 nama_teknisi = '$nama_teknisi',
					 jenis_kerjaan = '$jenis_kerjaan',
					 rekomendasi = '$rekomendasi' where id_gt = '$idgt'");
			?>
			<script type="text/javascript">
				alert("Update data berhasil");
				window.location.href="?page=pm_gt";
			</script>
			<?php 
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				mysqli_query($koneksi,"update pm_gt set periode = '$periode', 
					nama_utilitas = '$nama_utilitas',
					lokasi_utilitas = '$lokasi_utilitas', 
					rencana = '$rencana', 
					realisasi = '$realisasi', 
					 nama_teknisi = '$nama_teknisi',
					 jenis_kerjaan = '$jenis_kerjaan',
					 gambar = '$nama_gambar', 
					 rekomendasi = '$rekomendasi' where id_gt = '$idgt'");
				?>
					<script type="text/javascript">
						alert("Update data berhasil");
						window.location.href="?page=pm_gt";
					</script>
				<?php
			}else{
				?>
					<script type="text/javascript">
						alert("Upload Gambar Gagal");
					</script>
				<?php
			}
		}
	}
	?>

</div>