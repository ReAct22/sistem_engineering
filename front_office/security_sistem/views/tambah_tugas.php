<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_form) as kodeSipil from tb_tugas");
		$data = mysqli_fetch_array($query);
		$kodeSipil = $data['kodeSipil'];

		$urutan = (int) substr($kodeSipil, 3, 3);

		$urutan++;

		$huruf = "NRT";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<h3 class="ml-3" style="margin-top: 70px;">Add Rencana Tugas</h3>
<form accept="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No Form</span>
	  </div>
		<input type="text" name="no_form" class="form-control" value="<?php echo $kodeData; ?>">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Hari</span>
	  </div>
		<input type="text" name="hari" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal</span>
	  </div>
		<input type="date" name="tgl" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Regu</span>
	  </div>
		<select name="regu" class="form-control">
			<option value="Regu 1">Regu 1</option>
			<option value="Regu 2">Regu 2</option>
			<option value="Regu 3">Regu 3</option>
			<option value="Regu 4">Regu 4</option>
		</select>
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Shift</span>
	  </div>
		<select name="shift" class="form-control">
			<option value="Shift 1">Shift 1</option>
			<option value="Shift 2">Shift 2</option>
			<option value="Shift 3">Shift 3</option>
			<option value="Shift 4">Shift 4</option>
		</select>
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Waktu</span>
	  </div>
		<input type="time" name="waktu" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Pos</span>
	  </div>
		<input type="text" name="pos" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi</span>
	  </div>
		<textarea class="form-control" name="lokasi" rows="3"></textarea>
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Petugas</span>
	  </div>
		<input type="text" name="petugas" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jam Masuk</span>
	  </div>
		<input type="time" name="masuk" class="form-control">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jam Keluar</span>
	  </div>
		<input type="time" name="keluar" class="form-control">
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
		<textarea class="form-control" name="keterangan" rows="3"></textarea>
	</div>
	<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
</div>
	
	
</form>
<?php 
$no_form = @$_POST['no_form'];
$hari = @$_POST['hari'];
$tgl = @$_POST['tgl'];
$regu = @$_POST['regu'];
$shift = @$_POST['shift'];
$waktu = @$_POST['waktu'];
$pos = @$_POST['pos'];
$lokasi = @$_POST['lokasi'];
$petugas = @$_POST['petugas'];
$masuk = @$_POST['masuk'];
$keluar = @$_POST['keluar'];
$Keterangan = @$_POST['keterangan'];

$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($no_form == "" || $hari == "" || $tgl == "" || $regu == "" || $shift == "" || $waktu == "" || $pos == "" || $lokasi == "" || $petugas == "" || $masuk == "" || $keluar == "" || $Keterangan == ""){
		?>
			<script type="text/javascript">
				alert("Data tidak boleh ada yang kosong")
			</script>
		<?php
	}else{
		mysqli_query($koneksi,"insert into tb_tugas values('$no_form','$hari','$tgl','$regu','$shift','$waktu','$pos','$lokasi','$petugas','$masuk','$keluar','$Keterangan')");
		?>
			<script type="text/javascript">
				alert("Data berhasi di tambahkan");
				window.location.href='?page=tugas';
			</script>
		<?php
	}
}


?>