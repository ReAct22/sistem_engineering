<?php 
	include "config/koneksi.php";
	$idstp = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_stp where id_stp = '$idstp'");
	$data = mysqli_fetch_array($sql);
?>
<div style="margin-left: 30px;">
	<h1>Tambah Data PREVENTIF MAINTENANCE Lift</h1>
	<br>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. PM Lift</span>
	  </div>
		<input type="text" name="no_pmlift" class="form-control" disabled="disabled" value="<?php echo $data['id_stp'] ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Rencana</span>
	  </div>
		<input type="date" name="tanggal_rencana" value="<?php echo $data['rencana'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Realisasi</span>
	  </div>
		<input type="date" name="tanggal_realisasi" value="<?php echo $data['realisasi'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Equipment</span>
	  </div>
		<select name="nama_equipmen" class="form-control">
			<option label=""><?php echo $data['nama_stp'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_me");
			while($d = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $d['nama_equipment'] ?>"><?php echo $d['nama_equipment'] ?></option>
			<?php 
			}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Lokasi</span>
	  </div>
		<select name="lokasi_equipmen" class="form-control">
			<option label=""><?php echo $data['lokasi_stp'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_me");
			while($d = mysqli_fetch_array($sql)){ 
			?>
			<option value="<?php echo $d['lokasi_utilitas'] ?>"><?php echo $d['lokasi_utilitas'] ?></option>
			<?php 
			}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jenis Kerusakan</span>
	  </div>
		<input type="text" name="jenis_kerusakan" value="<?php echo $data['jenis_kerusakan'] ?>" class="form-control">
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
	$nama_equipmen = @$_POST['nama_equipmen'];
	$lokasi_equipmen = @$_POST['lokasi_equipmen'];
	$jenis_kerusakan = @$_POST['jenis_kerusakan'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
			mysqli_query($koneksi, "update pm_stp set rencana = '$tanggal_rencana',
				realisasi = '$tanggal_realisasi',
				nama_stp = '$nama_equipmen',
				lokasi_stp = '$lokasi_equipmen',
				jenis_kerusakan = '$jenis_kerusakan',
				nama_teknisi = '$nama_teknisi',
				progres = '$progres',
				keterangan = '$keterangan' where id_stp = '$idstp'");
			?>
			<script type="text/javascript">
				alert("Update data berhasil");
				window.location.href="?page=pm_stp";
			</script>
			<?php
	}
	?>
	</div>
</div>