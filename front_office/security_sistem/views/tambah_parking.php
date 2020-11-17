<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(id_tenant) as kodeSipil from d_parking");
		$data = mysqli_fetch_array($query);
		$kodeSipil = $data['kodeSipil'];

		$urutan = (int) substr($kodeSipil, 3, 3);

		$urutan++;

		$huruf = "NPL";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<h3 class="ml-3" style="margin-top: 70px;">Add Request List</h3>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">ID Tenant</span>
	  </div>
		<input type="text" name="id_tenant" class="form-control" value="<?php echo $kodeData; ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama</span>
	  </div>
		<input type="text" name="nama" class="form-control" >
	</div>


	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Floar</span>
	  </div>
		<select name="floor" class="form-control">
			<option>Select floor</option>
			<option value="Ground">Ground</option>
			<option value="floor 2">floor 2</option>
			<option value="floor 3">floor 3</option>
			<option value="floor 4">floor 4</option>
			<option value="floor 5">floor 5</option>
			<option value="floor 6">floor 6</option>
			<option value="floor 7">floor 7</option>
			<option value="floor 8">floor 8</option>
			<option value="floor 9">floor 9</option>
			<option value="floor 10">floor 10</option>
			<option value="floor 11">floor 11</option>
			<option value="floor 12">floor 12</option>
			<option value="floor 13">floor 13</option>
			<option value="floor 14">floor 14</option>
			<option value="floor 15">floor 15</option>
			<option value="floor 16">floor 16</option>
			<option value="floor 17">floor 17</option>
			<option value="floor PH">floor PH</option>
		</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Unit</span>
	  </div>
		<input type="text" name="unit" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Park No.Lot</span>
	  </div>
		<input type="text" name="no_park" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No Plat kedaraan</span>
	  </div>
		<input type="text" name="no_plat" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Driver</span>
	  </div>
		<input type="text" name="nama_driver" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
		<textarea rows="3" class="form-control" name="keterangan"></textarea>
	</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
	</div>
	
</form>
<?php 
$id_tenant = @$_POST['id_tenant'];
$nama = @$_POST['nama'];
$floor = @$_POST['floor'];
$unit = @$_POST['unit'];
$no_park = @$_POST['no_park'];
$no_plat = @$_POST['no_plat'];
$nama_driver = @$_POST['nama_driver'];
$keterangan = @$_POST['keterangan'];
$tambah_data = @$_POST['tambah'];

if($tambah_data){
	if($id_tenant == "" || $nama == "" || $floor == "" || $unit == "" || $no_park == "" || $no_plat == "" || $nama_driver == "" || $keterangan == ""){
		?>
			<script type="text/javascript">
				alert("Inputan tidak boleh ada yang kosong");
			</script>
		<?php
	}else{
		mysqli_query($koneksi,"insert into d_parking values('$id_tenant','$nama','$floor','$unit','$no_park','$no_plat','$nama_driver','$keterangan')");
		?>
			<script type="text/javascript">
				alert("Data berhasil di tambahkan");
				window.location.href='?page=list_parking';
			</script>
		<?php
	}
} 
?>


