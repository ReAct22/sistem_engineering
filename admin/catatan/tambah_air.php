<?php 
	include "config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_air) as kodePC from dc_air");
		$data = mysqli_fetch_array($query);
		$kodePC = $data['kodePC'];

		$urutan = (int) substr($kodePC, 3, 3);

		$urutan++;

		$huruf = "PCA";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>

<div class="card-body">
	<h2>Input data Pencatatan Air</h2>
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
	<br>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Unit</span>
	  </div>
			<input type="text" name="no_cek" value="<?php echo $kodeData ?>" class="form-control">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>

			<select name="unit" class="form-control">
				<option></option>
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
	  <span class="input-group-text">Meter Awal</span>
	  </div>
			<input type="text" name="meter_awal" id="txt1" onkeyup="sum();" class="form-control">
		</div>


		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Meter Akhir</span>
	  </div>
			<input type="text" name="meter_akhir" id="txt2" onkeyup="sum();" class="form-control">
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
			<input type="text" name="total" id="txt3" class="form-control">
		</div>


		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
			<textarea rows="3" class="form-control" name="keterangan"></textarea>
		</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Tambah">
		<input type="reset" name="" class="btn btn-md btn-danger">
	</form>
	<?php 
	$no_cek = @$_POST['no_cek'];
	$unit = @$_POST['unit'];
	$meter_awal = @$_POST['meter_awal'];
	$meter_akhir = @$_POST['meter_akhir'];

	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = 'img/';
	$nama_gambar = @$_FILES['gambar']['name'];

	$total = @$_POST['total'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];
	if($tambah_data){
		if($no_cek == "" || $unit == "" || $meter_awal == "" || $meter_akhir == "" || $nama_gambar == "" || $total == "" || $keterangan == ""){
			?>
			<script type="text/javascript">
				alert("Input Data tidak boleh ada yang kosong");
			</script>
			<?php 
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				mysqli_query($koneksi,"insert into dc_air values('$no_cek','$unit','$meter_awal','$meter_akhir','$nama_gambar','$total','$keterangan')");
				?>
					<script type="text/javascript">
						alert("Data berhasil di tambah kan");
						window.location.href="?page=pc_air";
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