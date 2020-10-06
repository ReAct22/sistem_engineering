<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(id_request) as kodeSipil from d_request");
		$data = mysqli_fetch_array($query);
		$kodeSipil = $data['kodeSipil'];

		$urutan = (int) substr($kodeSipil, 3, 3);

		$urutan++;

		$huruf = "NRL";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<h3 class="ml-3" style="margin-top: 70px;">Add Request List</h3>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No Request</span>
	  </div>
		<input type="text" name="id_request" class="form-control" value="<?php echo $kodeData; ?>">
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
	  <span class="input-group-text">Ext</span>
	  </div>
		<input type="text" name="ext" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama</span>
	  </div>
		<input type="text" name="nama" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Company</span>
	  </div>
		<input type="text" name="company" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Renmark</span>
	  </div>
		<input type="text" name="renmark" class="form-control" >
	</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
	</div>
	
</form>
<?php 
$id_request = @$_POST['id_request'];
$floor = @$_POST['floor'];
$unit = @$_POST['unit'];
$ext = @$_POST['ext'];
$nama = @$_POST['nama'];
$company = @$_POST['company'];
$renmark = @$_POST['renmark'];
$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($id_request == "" || $floor == "" || $unit == "" || $ext == "" || $nama == "" || $company == "" || $renmark == ""){
		?>
		<script type="text/javascript">
			alert("Inputan tidak boleh ada yang kosong");
		</script>
		<?php
	}else{
		mysqli_query($koneksi,"insert into d_request values('$id_request','$floor','$unit','$ext','$nama','$company','$renmark')");
		?>
		<script type="text/javascript">
			alert("Data berhasil Di input");
			window.location.href='?page=request';
		</script>
		<?php
	}
}

?>

