<?php 
	include "config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_acten) as kodePMT from pm_acten");
		$data = mysqli_fetch_array($query);
		$kodePMT = $data['kodePMT'];

		$urutan = (int) substr($kodePMT, 3, 3);

		$urutan++;

		$huruf = "PMT";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h1>Tambah Data PREVENTIF MAINTENANCE AC Tenant</h1>
	<br>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.AC Tenant</span>
	  </div>
		<input type="text" name="no_pmten" class="form-control" value="<?php echo $kodeData ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tangga Rencana</span>
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
	  <span class="input-group-text">Unit</span>
	  </div>
		<select name="unit" class="form-control">
			<option label="">Pilih Nomer Unit</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from tb_unit");
			while($data = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $data['unit'] ?>"><?php echo $data['unit'] ?></option>
			<?php 
				}
			?>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
		<select name="nama_teknisi" class="form-control">
			<option label="Nama Teknisi">Nama Teknisi</option>
			<option value="Andrean">Andrean</option>
		</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Progres</span>
	  </div>
		<input type="text" name="progres" class="form-control">
		</div>
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">keterangan</span>
	  </div>
		<textarea name="keterangan" rows="3" class="form-control"></textarea>
		</div>
		<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
		<input type="reset" name="" class="w3-bar-item w3-button w3-red">
	</form>
	<?php 
	$no_pmten = @$_POST['no_pmten'];
	$tanggal_rencana = @$_POST['tanggal_rencana'];
	$tanggal_realisasi = @$_POST['tanggal_realisasi'];
	$unit = @$_POST['unit'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
		if($no_pmten == "" || $tanggal_rencana == "" || $tanggal_realisasi == "" || $unit == "" || $nama_teknisi == "" || $progres == "" || $keterangan == ""){
			?>
			<script type="text/javascript">
				alert("Data tidak boleh ada yang kosong");
			</script>
			<?php
		}else{
			mysqli_query($koneksi,"insert into pm_acten values('$no_pmten','$tanggal_rencana','$tanggal_realisasi','$unit','$nama_teknisi','$progres','$keterangan')");
			?>
			<script type="text/javascript">
				alert("Tambah data berhasil");
				window.location.href="?page=acten";
			</script>
			<?php
		}
	}
	?>
	</div>
</div>