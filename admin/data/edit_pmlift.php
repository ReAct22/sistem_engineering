<?php 
	include "config/koneksi.php";
	$idlift = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_lift where id_pmlift = '$idlift'");
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
		<input type="text" name="no_pmlift" class="form-control" disabled="disabled" value="<?php echo $data['id_pmlift'] ?>">
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
	  <span class="input-group-text">Pilih Equipment</span>
	  </div>
		<select name="nama_equipmen" class="form-control">
			<option label="Pilih Nama Equipment"><?php echo $data['nama_equipmen'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_lift");
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
	  <span class="input-group-text">Pilih Lokasi</span>
	  </div>
		<select name="lokasi_equipmen" class="form-control">
			<option label="Pilih Lokasi"><?php echo $data['lokasi_equipmen'] ?></option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_lift");
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
	  <span class="input-group-text">Nama Vendor</span>
	  </div>
		<input type="text" name="nama_vendor" value="<?php echo $data['nama_vendor'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
		<input type="text" name="nama_teknisi" value="<?php echo $data['nama_teknisi'] ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat Vendor</span>
	  </div>
		<input type="text" name="alamat_vendor" value="<?php echo $data['alamat_vendor'] ?>" class="form-control">
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
	$nama_vendor = @$_POST['nama_vendor'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$alamat_vendor = @$_POST['alamat_vendor'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
			mysqli_query($koneksi, "update pm_lift set tanggal_rencana = '$tanggal_rencana',
				tanggal_realisasi = '$tanggal_realisasi',
				nama_equipmen = '$nama_equipmen',
				lokasi_equipmen = '$lokasi_equipmen',
				nama_vendor = '$nama_vendor',
				nama_teknisi = '$nama_teknisi',
				alamat_vendor = '$alamat_vendor',
				progres = '$progres',
				keterangan = '$keterangan' where id_pmlift = '$idlift'");
			?>
			<script type="text/javascript">
				alert("Update data berhasil");
				window.location.href="?page=pmlift";
			</script>
			<?php
	}
	?>
	</div>
</div>