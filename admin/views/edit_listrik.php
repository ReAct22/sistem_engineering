<?php 
	include "../config/koneksi.php";
	$idcek = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from dp_listrik where id_cek = '$idcek'");
	$data = mysqli_fetch_array($sql);
?>
<h3 class="ml-3" style="margin-top: 70px;">Input Data Pemakaian Listrik</h3>
<script type="text/javascript">
		function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
	</script>

<form action="" method="post" class="form-group" enctype="multipart/form-data">

	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No. cek</span>
	  </div>
	<input type="text" name="no_cek" class="form-control" value="<?php echo $data['id_cek'] ?>" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>
	<select name="no_unit" class="form-control">
		<option><?php echo $data['unit'] ?></option>
		<!--Pengambilan data otomatis dari tb_unit-->
		<?php 
		$sql = mysqli_query($koneksi,"select *from tb_unit");
		while($d = mysqli_fetch_array($sql)){
		?>
		<option value="<?php echo $d['unit'] ?>"><?php echo $d['unit'] ?></option>
		<?php 
		}
		?>
	</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Meter awal</span>
	  </div>
	<input type="text" name="meter_awal" id="txt1" onkeyup="sum();" class="form-control" value="<?php echo $data['meter_awal'] ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Meter Akhir</span>
	  </div>
	<input type="text" name="meter_akhir" id="txt2" onkeyup="sum();" class="form-control" value="<?php echo $data['meter_akhir'] ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Upload Gambar</span>
	  </div>
	<input type="file" name="gambar" class="form-control">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Total Pemakaian</span>
	  </div>
	<input type="text" name="pemakaian" id="txt3"  class="form-control" value="<?php echo $data['pemakaian'] ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
	<textarea name="keterangan" rows="3" class="form-control"><?php echo $data['keterangan'] ?></textarea>
	</div>
	<input type="submit" name="tambah" value="tambah" class="btn btn-md btn-success">
	<input type="reset" name="" value="Cancel" class="btn btn-md btn-danger">
	</div>
</form>
<?php 
$no_cek = @$_POST['no_cek'];
$no_unit = @$_POST['no_unit'];
$meter_awal = @$_POST['meter_awal'];
$meter_akhir = @$_POST['meter_akhir'];

$sumber = @$_FILES['gambar']['tmp_name'];
$target = '../assets/img/';
$nama_gambar = @$_FILES['gambar']['name'];

$pemakaian = @$_POST['pemakaian'];
$keterangan = @$_POST['keterangan'];

$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($nama_gambar == ""){
		mysqli_query($koneksi,"update dp_listrik set unit = '$no_unit',
			meter_awal = '$meter_awal',
			meter_akhir = '$meter_akhir',
			pemakaian = '$pemakaian',
			keterangan = '$keterangan' where id_cek = '$idcek'");
		?>
			<script type="text/javascript">
				alert("input Data Berhasil");
				window.location.href="?page=listrik";
			</script>
		<?php
	}else{
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if($pindah){
			mysqli_query($koneksi,"update dp_listrik set unit = '$no_unit',
			meter_awal = '$meter_awal',
			meter_akhir = '$meter_akhir',
			gambar = '$nama_gambar',
			pemakaian = '$pemakaian',
			keterangan = '$keterangan' where id_cek = '$idcek'");
			?>
			<script type="text/javascript">
				alert("update Data Berhasil");
				window.location.href="?page=listrik";
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
