<?php 
	$query = mysqli_query($koneksi,"select max(id_geset) as kodePML from pm_geset");
		$data = mysqli_fetch_array($query);
		$kodePML = $data['kodePML'];

		$urutan = (int) substr($kodePML, 3, 3);

		$urutan++;

		$huruf = "PMG";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div class="card-body">
	<h2>Input data GESET</h2>
	<form action="" method="post" enctype="multipart/form-data" class="form-group">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Unit</span>
	  </div>
	  	<input type="text" name="no_pm" value="<?php echo $kodeData ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Preventif</span>
	  </div>
	  <select name="periode" class="form-control">
	  	<option value="3 Bulanan">3 Bulanan</option>
	  	<option value="6 Bulanan">6 Bulanan</option>
	  	<option value="Tahunan">Tahunan</option>
	  </select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Utilitas</span>
	  </div>
			<input type="text" name="nama_utilitas" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi Utilitas</span>
	  </div>
			<input type="text" name="lokasi_utilitas" class="form-control">
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
	  <span class="input-group-text">Nama Vendor</span>
	  </div>
			<input type="text" name="nama_vendor" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat Vendor</span>
	  </div>
			<textarea rows="3" name="alamat" style="width: 500px; border-color:currentColor; "></textarea>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Teknisi</span>
	  </div>
			<input type="text" name="nama_teknisi" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jenis Perkerjaaan</span>
	  </div>
			<input type="text" name="jenis_kerjaan" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Upload Gambar</span>
	  </div>
			<input type="file" name="gambar" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Rekomendasi</span>
	  </div>
			<input type="text" name="rekomendasi" class="form-control">
		</div>
		<input type="submit" name="tambah" class="btn btn-md btn-success">
		<input type="reset" class="btn btn-md btn-danger" name="">
	</form>

	<?php 
	$no_pm = @$_POST['no_pm'];
	$periode = @$_POST['periode'];
	$nama_utilitas = @$_POST['nama_utilitas'];
	$lokasi_utilitas = @$_POST['lokasi_utilitas'];
	$rencana = @$_POST['rencana'];
	$realisasi = @$_POST['realisasi'];
	$nama_vendor = @$_POST['nama_vendor'];
	$alamat_vendor = @$_POST['alamat'];
	$nama_teknisi = @$_POST['nama_teknisi'];
	$jenis_kerjaan = @$_POST['jenis_kerjaan'];

	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = '../assets/img/';
	$nama_gambar = @$_FILES['gambar']['name'];

	$rekomendasi = @$_POST['rekomendasi'];
	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
		if($no_pm == "" || $periode == "" || $nama_utilitas == "" || $lokasi_utilitas == "" || $rencana == "" || $realisasi == "" || $nama_vendor == "" || $alamat_vendor == "" || $nama_teknisi == "" || $jenis_kerjaan == "" ||  $nama_gambar == "" || $rekomendasi == "" ){
			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh Kosong");
			</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				mysqli_query($koneksi,"insert into pm_geset values('$no_pm','$periode','$nama_utilitas','$lokasi_utilitas','$rencana','$realisasi','$nama_vendor','$alamat_vendor','$nama_teknisi','$jenis_kerjaan','$nama_gambar','$rekomendasi')");
				?>
				<script type="text/javascript">
					alert("Input Data berhasil");
					window.location.href="?page=pm_geset";
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