<?php 
	include "config/koneksi.php";
	$idten = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_acten where id_acten = '$idten'");
	$data = mysqli_fetch_array($sql);
?>
<div style="margin-left: 30px;">
	<h1>Update Data PREVENTIF MAINTENANCE AC Tenant</h1>
	<br>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.AC Tenant</span>
	  </div>
		<input type="text" name="no_pmten" class="form-control" disabled="disabled" value="<?php echo $data['id_acten'] ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tangga Rencana</span>
	  </div>
		<input type="date" name="tanggal_rencana" value="<?php echo $data['tanggal_rencana'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Realisasi</span>
	  </div>
		<input type="date" name="tanggal_realisasi" value="<?php echo $data['tanggal_realisasi'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Unit</span>
	  </div>
		<select name="unit" class="form-control">
			<option label=""><?php echo $data['unit'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from tb_unit");
			while($d = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $d['unit'] ?>"><?php echo $d['unit'] ?></option>
			<?php 
				}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
			<input type="text" name="nama_teknisi" class="form-control" value="<?php echo $data['nama_teknisi'] ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Progres</span>
	  </div>
		<input type="text" name="progres" value="<?php echo $data['progres'] ?>" class="form-control">
		</div>
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">keterangan</span>
	  </div>
		<textarea name="keterangan" rows="3" class="form-control"><?php echo $data['keterangan'] ?></textarea>
		</div>
		<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
		<input type="reset" name="" class="w3-bar-item w3-button w3-red">
	</form>
	<?php 
	$tanggal_rencana = @$_POST['tanggal_rencana'];
	$tanggal_realisasi = @$_POST['tanggal_realisasi'];
	$unit = @$_POST['unit'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
			mysqli_query($koneksi,"update pm_acten set tanggal_rencana = '$tanggal_rencana',
				tanggal_realisasi = '$tanggal_realisasi',
				unit = '$unit',
				nama_teknisi = '$nama_teknisi',
				progres = '$progres',
				keterangan = '$keterangan' where id_acten = '$idten'");
			?>
			<script type="text/javascript">
				alert("Update data berhasil");
				window.location.href="?page=acten";
			</script>
			<?php
	}
	?>
	</div>
</div>