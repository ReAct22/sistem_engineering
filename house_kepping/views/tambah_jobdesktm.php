<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_perawatan) as kodeUtilitas from jb_st");
		$data = mysqli_fetch_array($query);
		$kodeUtilitas = $data['kodeUtilitas'];

		$urutan = (int) substr($kodeUtilitas, 3, 3);

		$urutan++;

		$huruf = "JBT";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Job Deskripsi Tanaman</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Schedule Perawatan</span>
	  </div>
			<input type="text" name="no_perawatan" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal</span>
	  </div>
			<input type="date" name="tanggal" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Petugas</span>
	  </div>
			<input type="text" name="nama_petugas" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Area(Zona)</span>
	  </div>
			<select name="area" class="form-control">
				<option label="">-- Silahkan Pilih --</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi Zona</span>
	  </div>
			<input type="text" name="desk_zona" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Frekuensi</span>
	  </div>
			<select name="frekuensi" class="form-control">
				<option label="">-- silahkan Pilih --</option>
				<option value="H">H</option>
				<option value="M">M</option>
				<option value="2M">2M</option>
				<option value="B.2B">B.2B</option>
			</select>
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Uraian Perkerjaan</span>
	  </div>
			<input type="text" name="uraian_perkerjaan" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Catatan</span>
	  </div>
			<input type="text" name="catatan" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
			<textarea class="form-control" name="keterangan" rows="3" ></textarea>
			</div>
			
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
			$no_perawatan = @$_POST['no_perawatan'];
			$tanggal = @$_POST['tanggal'];
			$nama_petugas = @$_POST['nama_petugas'];
			$area = @$_POST['area'];
			$desk_zona = @$_POST['desk_zona'];
			$frekuensi = @$_POST['frekuensi'];
			$uraian_perkerjaan = @$_POST['uraian_perkerjaan'];
			$catatan = @$_POST['catatan'];
			$keterangan = @$_POST['keterangan'];

			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($no_perawatan == "" || $tanggal == "" || $nama_petugas == "" || $area == "" || $desk_zona == "" || $frekuensi == "" || $uraian_perkerjaan == "" || $catatan == "" || $keterangan == ""){
					?>
						<script type="text/javascript">
							alert("Data tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into jb_st values('$no_perawatan','$tanggal','$nama_petugas','$area','$desk_zona','$frekuensi','$uraian_perkerjaan','$catatan','$keterangan')");
					?>
						<script type="text/javascript">
							alert("Data berhasil ditambah");
							window.location.href="?page=job_desktm";
						</script>
					<?php
				}
			}
		 ?>
	</div>
</div>