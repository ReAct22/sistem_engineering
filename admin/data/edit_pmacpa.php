<?php 
	include "../config/koneksi.php";
	$idac = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_acap where id_pmac = '$idac'");
	$data = mysqli_fetch_array($sql);
?>
<div style="margin-left: 30px; margin-top: 20px;">
	<h2>Update Data PREVENTIF MAINTENANCE Ac Area Public</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. PM AC</span>
	  </div>
		<input type="text" name="no_pmacpa" class="form-control" disabled="disabled" value="<?php echo $data['id_pmac'] ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Rencana</span>
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
	  <span class="input-group-text">Nama AC</span>
	  </div>
		<select name="nama_ac" class="form-control">
			<option><?php echo $data['nama_ac'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_ac_public_area");
			while($d = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $d['nama_utilitas'] ?>"><?php echo $d['nama_utilitas'] ?></option>
			<?php 
			}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi</span>
	  </div>
		<select name="lokasi_ac" class="form-control">
			<option label=""><?php echo $data['lokasi_ac'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_ac_public_area");
			while($d = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $d['lokasi_utilitas']; ?>"><?php echo $d['lokasi_utilitas']; ?></option>
			<?php 
				}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
		<input type="text" name="nama_teknisi" value="<?php echo $data['nama_teknisi'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Progres</span>
	  </div>
		<input type="text" name="progres" value="<?php echo $data['progres'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
		<textarea name="keterangan" rows="3" class="form-control"><?php echo $data['keterangan'] ?></textarea>
		</div>

		<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
		<input type="reset" name="" class="w3-bar-item w3-button w3-red">
	</form>
	<?php 
	$tanggal_rencana = @$_POST['tanggal_rencana'];
	$tanggal_realisasi = @$_POST['tanggal_realisasi'];
	$nama_ac = @$_POST['nama_ac'];
	$lokasi_ac = @$_POST['lokasi_ac'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
			mysqli_query($koneksi,"update pm_acap set tanggal_rencana = '$tanggal_rencana',
				tanggal_realisasi = '$tanggal_realisasi',
				nama_ac = '$nama_ac',
				lokasi_ac = '$lokasi_ac',
				nama_teknisi = '$nama_teknisi',
				progres = '$progres',
				keterangan = '$keterangan' where id_pmac = '$idac'");
			?>
			<script type="text/javascript">
				alert('Data berhasil di Update');
				window.location.href="?page=bulanan";
			</script>
			<?php
	}
	?>
	</div>
</div>