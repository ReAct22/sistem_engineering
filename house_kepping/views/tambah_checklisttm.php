<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_check) as kodeUtilitas from ls_th");
		$data = mysqli_fetch_array($query);
		$kodeUtilitas = $data['kodeUtilitas'];

		$urutan = (int) substr($kodeUtilitas, 3, 3);

		$urutan++;

		$huruf = "CLT";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Check List Tanaman</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Check List Tanaman</span>
	  </div>
			<input type="text" name="no_check" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Check List</span>
	  </div>
			<select class="form-control" name="check_list">
				<option label="">-- Select Opsi --</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal</span>
	  </div>
			<input type="date" name="tanggal" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jenis Tanaman</span>
	  </div>
			<input type="text" name="tanaman" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Area</span>
	  </div>
			<input type="text" name="area" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Kondisi</span>
	  </div>
			<input type="text" name="kondisi" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi kondisi</span>
	  </div>
			<input type="text" name="desk_kondisi" class="form-control" >
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
		$check_list = @$_POST['check_list'];
		$tanggal = @$_POST['tanggal'];
		$tanaman = @$_POST['tanaman'];
		$area = @$_POST['area'];
		$kondisi = @$_POST['kondisi'];
		$desk_kondisi = @$_POST['desk_kondisi'];
		$keterangan = @$_POST['keterangan'];

		$tambah_data = @$_POST['tambah'];
		if($tambah_data){
			if($no_check == "" || $check_list == "" || $tanggal == "" || $tanaman == "" || $area == "" || $kondisi == "" || $desk_kondisi == "" || $keterangan == ""){
				?>
					<script type="text/javascript">
						alert("Data tidak boleh ada yang kosong");
					</script>
				<?php
			}else{
				mysqli_query($koneksi,"insert into ls_th values('$no_check','$check_list','$tanggal','$tanaman','$area','$kondisi','$desk_kondisi','$keterangan')");
				?>
					<script type="text/javascript">
						alert("Data berhasil ditambahkan");
						window.location.href="?page=check_listtm";
					</script>
				<?php
			}
		}
		 ?>
	</div>
</div>