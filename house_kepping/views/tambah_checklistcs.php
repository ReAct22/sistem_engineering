<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_check) as kodeUtilitas from hk_cl");
		$data = mysqli_fetch_array($query);
		$kodeUtilitas = $data['kodeUtilitas'];

		$urutan = (int) substr($kodeUtilitas, 3, 3);

		$urutan++;

		$huruf = "CLC";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Electrical</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Check List Cleaning Servis</span>
	  </div>
			<input type="text" name="no_check" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Floor</span>
	  </div>
			<input type="text" name="floor" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi Floor</span>
	  </div>
			<input type="text" name="desk_floor" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jenis Perkerjaan</span>
	  </div>
			<input type="text" name="perkerjaan" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kondisi</span>
	  </div>
			<input type="text" name="kondisi" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Action By</span>
	  </div>
			<select class="form-control" name="action_by">
				<option label="Select Option">Select Option</option>
				<option value="HK">HK</option>
				<option value="Eng">Eng</option>
				<option value="TR">TR</option>
				<option value="Sec">Sec</option>
				<option value="HDM">HDM</option>
			</select>
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama petugas</span>
	  </div>
			<input type="text" name="nama_petugas" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Catatan</span>
	  </div>
			<input type="text" name="catatan" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Target/Realisasi</span>
	  </div>
			<input type="text" name="target" class="form-control" >
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
			$no_check = @$_POST['no_check'];
			$floor = @$_POST['floor'];
			$desk_floor = @$_POST['desk_floor'];
			$perkerjaan = @$_POST['perkerjaan'];
			$kondisi = @$_POST['kondisi'];
			$action_by = @$_POST['action_by'];
			$nama_petugas = @$_POST['nama_petugas'];
			$catatan = @$_POST['catatan'];
			$target = @$_POST['target'];
			$keterangan = @$_POST['keterangan'];

			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($no_check == "" || $floor == "" || $desk_floor == "" || $perkerjaan == "" || $kondisi == "" || $action_by == "" || $nama_petugas == "" || $catatan == "" || $target == "" || $keterangan == ""){
					?>
						<script type="text/javascript">
							alert("Data Tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into hk_cl values('$no_check','$floor','$desk_floor','$perkerjaan','$kondisi','$action_by','$nama_petugas','$catatan','$target','$keterangan')");
					?>
						<script type="text/javascript">
							alert("Data berhasil di input");
							window.location.href="?page=check_listcs";
						</script>
					<?php
				}
			}
		?>
	</div>
</div>