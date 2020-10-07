<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_apar) as kodeSipil from p_apar");
		$data = mysqli_fetch_array($query);
		$kodeSipil = $data['kodeSipil'];

		$urutan = (int) substr($kodeSipil, 3, 3);

		$urutan++;

		$huruf = "NPA";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<h3 class="ml-3" style="margin-top: 70px;">Add Preventife Apar</h3>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No Preventife Apar</span>
	  </div>
		<input type="text" name="no_apar" class="form-control" value="<?php echo $kodeData; ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tower</span>
	  </div>
		<select class="form-control" name="tower">
			<option value="A">A</option>
			<option value="B">B</option>
		</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lantai</span>
	  </div>
		<select name="lantai" class="form-control">
			<option>Select lantai</option>
			<option value="Ground">Ground</option>
			<option value="lantai 2">lantai 2</option>
			<option value="lantai 3">lantai 3</option>
			<option value="lantai 4">lantai 4</option>
			<option value="lantai 5">lantai 5</option>
			<option value="lantai 6">lantai 6</option>
			<option value="lantai 7">lantai 7</option>
			<option value="lantai 8">lantai 8</option>
			<option value="lantai 9">lantai 9</option>
			<option value="lantai 10">lantai 10</option>
			<option value="lantai 11">lantai 11</option>
			<option value="lantai 12">lantai 12</option>
			<option value="lantai 13">lantai 13</option>
			<option value="lantai 14">lantai 14</option>
			<option value="lantai 15">lantai 15</option>
			<option value="lantai 16">lantai 16</option>
			<option value="lantai 17">lantai 17</option>
			<option value="lantai PH">lantai PH</option>
		</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi Lantai</span>
	  </div>
		<textarea rows="3" class="form-control" name="des_lantai"></textarea>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Posisi</span>
	  </div>
		<input type="text" name="posisi" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi Posisi</span>
	  </div>
		<textarea rows="3" class="form-control" name="des_posisi"></textarea>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Masa Berlaku</span>
	  </div>
		<input type="date" name="masa_berlaku" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Preasure</span>
	  </div>
		<input type="text" name="preasure" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Deskripsi Preasure</span>
	  </div>
		<textarea rows="3" class="form-control" name="des_preasure"></textarea>
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
$no_apar = @$_POST['no_apar'];
$tower = @$_POST['tower'];
$lantai = @$_POST['lantai'];
$des_lantai = @$_POST['des_lantai'];
$posisi = @$_POST['posisi'];
$des_posisi = @$_POST['des_posisi'];
$masa_berlaku = @$_POST['masa_berlaku'];
$preasure = @$_POST['preasure'];
$des_preasure = @$_POST['preasure'];
$keterangan = @$_POST['keterangan'];
$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($no_apar == "" || $tower == "" || $lantai == "" || $des_lantai == "" || $posisi == "" || $des_posisi == "" || $masa_berlaku == "" || $preasure == "" || $des_preasure == "" || $keterangan == ""){
		?>
			<script type="text/javascript">
				alert("Data tidak boleh ada yang kosong");
			</script>
		<?php
	}else{
		mysqli_query($koneksi,"insert into p_apar values('$no_apar','$tower','$lantai','$des_lantai','$posisi','$des_posisi','$masa_berlaku','$preasure','$des_preasure','$keterangan')");
		?>
			<script type="text/javascript">
				alert("Data berhasil di tambah");
				window.location.href='?page=prevn_apar';
			</script>
		<?php
	}
}

 ?>

