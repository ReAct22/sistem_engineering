<?php 
	include "../config/koneksi.php";
?>
<div class="card-body">
	<?php 
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from dc_air where id_air = '$id'");
	$data = mysqli_fetch_array($sql)
	?>
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
			<input type="text" name="no_cek" class="form-control" value="<?php echo $data['id_air'] ?>" disabled="disabled">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>

			<select name="unit" class="form-control">
				<option><?php echo $data['unit'] ?></option>
				<?php 
			  		$sql = mysqli_query($koneksi,"select *from tb_unit");
					while($d = mysqli_fetch_array($sql)){	  		
		  		?>
				<option value="<?php echo $d['unit'] ?>"><?php echo $d['unit']; ?></option>
				<?php 
					}
				?>
			</select>
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Meter Awal</span>
	  </div>
			<input type="text" name="meter_awal" id="txt1" onkeyup="sum();"  class="form-control" value="<?php echo $data['meter_awal']; ?>">
		</div>


		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Meter Akhir</span>
	  </div>
			<input type="text" name="meter_akhir" id="txt2" onkeyup="sum();" value="<?php echo $data['meter_akhir']; ?>" class="form-control">
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
			<input type="text" name="total" id="txt3" value="<?php echo $data['total']; ?>" class="form-control">
		</div>


		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
			<textarea rows="3" class="form-control" name="keterangan"><?php echo $data['keterangan']; ?></textarea>
		</div>

		<input type="submit" name="edit" class="btn btn-md btn-success" value="Tambah">
		<input type="reset" name="" class="btn btn-md btn-danger">
	</form>
	<?php 
	$unit = @$_POST['unit'];
	$meter_awal = @$_POST['meter_awal'];
	$meter_akhir = @$_POST['meter_akhir'];

	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = '../assets/img/';
	$nama_gambar = @$_FILES['gambar']['name'];

	$total = @$_POST['total'];
	$keterangan = @$_POST['keterangan'];

	$edit_data = @$_POST['edit'];
	if($edit_data){
		if($nama_gambar == ""){
			mysqli_query($koneksi,"update dc_air set unit = '$unit', meter_awal = '$meter_awal', meter_akhir = '$meter_akhir', total = '$total', keterangan = '$keterangan' where id_air = '$id'");
			?>
			<script type="text/javascript">
				alert("Update data berhasil");
				window.location.href="?page=pc_dcair";
			</script>
			<?php 
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				mysqli_query($koneksi,"update dc_air set unit = '$unit', meter_awal = '$meter_awal', meter_akhir = '$meter_akhir', gambar = '$nama_gambar', total = '$total', keterangan = '$keterangan' where id_air = '$id'");
				?>
					<script type="text/javascript">
						alert("Data berhasil di tambah kan");
						window.location.href="?page=pc_dcair";
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