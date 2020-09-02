<?php  
	include "../config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_cek) as kodeListrik from dp_listrik");
		$data = mysqli_fetch_array($query);
		$kodeListrik = $data['kodeListrik'];

		$urutan = (int) substr($kodeListrik, 3, 3);

		$urutan++;

		$huruf = "DPL";
		$kodeData = $huruf.sprintf("%03s", $urutan);
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
<div class="card-body">
<form action="" method="post" class="form-group" enctype="multipart/form-data">
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Cek</span>
	  </div>
	<input type="text" name="no_cek" class="form-control" value="<?php echo $kodeData; ?>">
</div>
	
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Unit</span>
	  </div>
	<select name="unit" class="form-control">
		<option>Select Unit</option>
		<?php 
		$sql = mysqli_query($koneksi,"select *from tb_unit");
		while($data = mysqli_fetch_array($sql)){
		?>
		<option value="<?php echo $data['unit'] ?>"><?php echo $data['unit'] ?></option>
		<?php 
		}
		?>
	</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Meter Awal</span>
	  </div>
	<input type="text" name="meter_awal" id="txt1" onkeyup="sum();" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Meter Akhir</span>
	  </div>
	<input type="text" name="meter_akhir" id="txt2" onkeyup="sum();" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Upload Gambar</span>
	  </div>
	<input type="file" name="gambar" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Total Pemakaian</span>
	  </div>
	<input type="text" name="pemakaian" id="txt3" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
	<textarea name="keterangan" rows="3" class="form-control"></textarea>
	</div>
	<input type="submit" name="tambah" value="tambah" class="btn btn-md btn-success">
	<input type="reset" name="" value="Cancel" class="btn btn-md btn-danger">
</form>
</div>
<?php 
$no_cek = @$_POST['no_cek'];
$no_unit = @$_POST['unit'];
$meter_awal = @$_POST['meter_awal'];
$meter_akhir = @$_POST['meter_akhir'];

$sumber = @$_FILES['gambar']['tmp_name'];
$target = '../assets/img/';
$nama_gambar = @$_FILES['gambar']['name'];

$pemakaian = @$_POST['pemakaian'];
$keterangan = @$_POST['keterangan'];

$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($no_cek == "" || $no_unit == "" || $meter_awal == "" || $meter_akhir == "" || $nama_gambar == "" || $pemakaian == "" || $keterangan == ""){
		?>
		<script type="text/javascript">
			alert("Inputan tidak boleh ada yang kosong");
		</script>
		<?php
	}else{
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if($pindah){
			mysqli_query($koneksi,"insert into dp_listrik values('$no_cek','$no_unit','$meter_awal','$meter_akhir','$nama_gambar','$pemakaian','$keterangan')");
			?>
			<script type="text/javascript">
				alert("Input Data berhasil");
				window.location.href="?page=listrik";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Upload Gambar gagal");
			</script>
			<?php
		}
	}
}
?>