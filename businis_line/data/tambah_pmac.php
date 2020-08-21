<?php 
	include "config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_pmac) as kodePM from pm_acap");
		$data = mysqli_fetch_array($query);
		$kodePM = $data['kodePM'];

		$urutan = (int) substr($kodePM, 3, 3);

		$urutan++;

		$huruf = "PMC";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px; margin-top: 20px;">
	<h2>Tambah Data PREVENTIF MAINTENANCE Ac Area Public</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
		<input type="text" name="no_pmacpa" class="form-control" value="<?php echo $kodeData ?>">
		<br>
		<input type="date" name="tanggal_rencana" class="form-control">
		<br>
		<input type="date" name="tanggal_realisasi" class="form-control">
		<br>
		<input type="text" name="nama_ac" class="form-control">
		<br>
		<select name="lokasi_ac" class="form-control">
			<option label="">PIlih Lokasi</option>
			<?php 
			$sql = mysqli_query($koneksi,"select *from du_ac_public_area");
			while($data = mysqli_fetch_array($sql)){
			?>
			<option value="<?php echo $data['lokasi_utilitas']; ?>"><?php echo $data['lokasi_utilitas']; ?></option>
			<?php 
				}
			?>
		</select>
		<br>
		<input type="text" name="nama_teknisi" class="form-control">
		<br>
		<input type="text" name="progres" class="form-control">
		<br>
		<textarea name="keterangan" rows="3" class="form-control"></textarea>
		<br>
		<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
		<input type="reset" name="" class="w3-bar-item w3-button w3-red">
	</form>
	<?php 
	$no_pmacpa = @$_POST['no_pmacpa'];
	$tanggal_rencana = @$_POST['tanggal_rencana'];
	$tanggal_realisasi = @$_POST['tanggal_realisasi'];
	$nama_ac = @$_POST['nama_ac'];
	$lokasi_ac = @$_POST['lokasi_ac'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$progres = @$_POST['progres'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
		if($no_pmacpa == "" || $tanggal_rencana == "" || $tanggal_realisasi == "" || $nama_ac == "" || $lokasi_ac == "" || $nama_teknisi == "" || $progres == "" || $keterangan == ""){
			?>
			<script type="text/javascript">
				alert("Data tidak boleh ada yang kosong");
			</script>
			<?php
		}else{
			mysqli_query($koneksi,"insert into pm_acap values('$no_pmacpa','$tanggal_rencana','$tanggal_realisasi','$nama_ac','$lokasi_ac','$nama_teknisi','$progres','$keterangan')");
			?>
			<script type="text/javascript">
				alert('Data berhasil di tambahkan');
				window.location.href="?page=bulanan";
			</script>
			<?php
		}
	}
	?>
	</div>
</div>