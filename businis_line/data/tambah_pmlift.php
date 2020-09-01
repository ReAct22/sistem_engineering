<?php 
	include "../config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_pmlift) as kodePML from pm_lift");
		$data = mysqli_fetch_array($query);
		$kodePML = $data['kodePML'];

		$urutan = (int) substr($kodePML, 3, 3);

		$urutan++;

		$huruf = "PML";
		$kodeData = $huruf.sprintf("%03s", $urutan);
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
		<input type="text" name="no_pmlift" class="form-control" value="<?php echo $kodeData ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Rencana</span>
	  </div>
		<input type="date" name="tanggal_rencana" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Realisasi</span>
	  </div>
		<input type="date" name="tanggal_realisasi" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Equipment</span>
	  </div>
		<select name="nama_equipmen" class="form-control">
			<option label="Pilih Nama Equipment">Pilih Equipment</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_lift");
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
	  <span class="input-group-text">Pilih Lokasi</span>
	  </div>
		<select name="lokasi_equipmen" class="form-control">
			<option label="Pilih Lokasi">Pilih Lokasi</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_lift");
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
	  <span class="input-group-text">Nama Vendor</span>
	  </div>
		<input type="text" name="nama_vendor" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
		<input type="text" name="nama_teknisi" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat Vendor</span>
	  </div>
		<input type="text" name="alamat_vendor" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Progres</span>
	  </div>
		<input type="text" name="progres" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
		<textarea name="keterangan" rows="3" class="form-control"></textarea>
		</div>
		<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
		<input type="reset" name="" class="w3-bar-item w3-button w3-red">
	</form>
	<?php 
	$no_pmlift = @$_POST['no_pmlift'];
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
		if($no_pmlift == "" || $tanggal_rencana == "" || $tanggal_realisasi == "" || $nama_equipmen == "" || $lokasi_equipmen == "" || $nama_vendor == "" || $nama_teknisi == "" || $alamat_vendor == "" || $progres == "" || $keterangan == ""){
			?>
			<script type="text/javascript">
				alert("inputan Tidak boleh ada yang kosong");
			</script>
			<?php
		}else{
			mysqli_query($koneksi, "insert into pm_lift values('$no_pmlift','$tanggal_rencana','$tanggal_realisasi','$nama_equipmen','$lokasi_equipmen','$nama_vendor','$nama_teknisi','$alamat_vendor','$progres','$keterangan')");
			?>
			<script type="text/javascript">
				alert("Input data berhasil");
				window.location.href="?page=pmlift";
			</script>
			<?php
		}
	}
	?>
	</div>
</div>