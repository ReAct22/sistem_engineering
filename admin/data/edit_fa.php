<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px; margin-top: 20px;">
	<h2>Tambah Data PREVENTIF MAINTENANCE FIRE ALARM</h2>
	<?php 
	$idfa = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from pm_fa where id_pmfa = '$idfa'");
	$data = mysqli_fetch_array($sql);
	?>
	<div class="card-body">
		<form action="" method="post">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. PM FIRE ALARM</span>
	  </div>
				<input type="text" name="no_pm" disabled="disabled" value="<?php echo $data['id_pmfa'] ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Preventif</span>
	  </div>
				<select name="periode" class="form-control">
					<option><?php echo $data['periode'] ?></option>
					<option value="3 Bulanan">3 Bulanan</option>
					<option value="6 Bulanan">6 Bulanan</option>
					<option value="Tahunan">Tahunan</option>
				</select>
			</div>
			
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi PM</span>
	  </div>
				<input type="text" name="lokasi_pm" value="<?php echo $data['lokasi_pm'] ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>
				<select name="unit" class="form-control">
					<option><?php echo $data['nama_unit'] ?></option>
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
	  <span class="input-group-text">Lokasi Utilitas</span>
	  </div>
				<input type="text" name="lokasi_utilitas" value="<?php echo $data['lokasi_utilitas'] ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Rencana</span>
	  </div>
				<input type="date" name="rencana" value="<?php echo $data['rencana'] ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Realisasi</span>
	  </div>
				<input type="date" name="realisasi" value="<?php echo $data['realisasi'] ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Smoke dan Heat detector</span>
	  </div>
				<select class="form-control" name="break_glass">
					<option><?php echo $data['break_glass'] ?></option>
					<option>Break Glass</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="bell">
					<option><?php echo $data['bell'] ?></option>
					<option>Bell</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="telphone">
					<option><?php echo $data['telphone'] ?></option>
					<option>Telphone</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="box_hydrant">
					<option><?php echo $data['box_hydrant'] ?></option>
					<option>Box Hydrant</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="sprinkle">
					<option><?php echo $data['sprinkle'] ?></option>
					<option>Sprinkle</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
			</div>
			<input type="submit" name="edit" class="btn btn-md btn-success" value="Tambah">
			<input type="reset" name="" class="btn btn-md btn-danger">
		</form>
		<?php 
		$periode = @$_POST['periode'];
		$lokasi_pm = @$_POST['lokasi_pm'];
		$unit = @$_POST['unit'];
		$lokasi_utilitas = @$_POST['lokasi_utilitas'];
		$rencana = @$_POST['rencana'];
		$realisasi = @$_POST['realisasi'];
		$break_glass = @$_POST['break_glass'];
		$bell = @$_POST['bell'];
		$telphone = @$_POST['telphone'];
		$box_hydrant = @$_POST['box_hydrant'];
		$sprinkle = @$_POST["sprinkle"];

		$edit_data = @$_POST['edit'];
		if($edit_data){
				mysqli_query($koneksi,"update pm_fa set periode = '$periode',lokasi_pm = '$lokasi_pm', nama_unit = '$unit', lokasi_utilitas = '$lokasi_utilitas', rencana = '$rencana', realisasi = '$realisasi', break_glass = '$break_glass', bell = '$bell', telphone = '$telphone', box_hydrant = '$box_hydrant', sprinkle = '$sprinkle' where id_pmfa = '$idfa'");
				?>
				<script type="text/javascript">
					alert("Edit Data berhasil");
					window.location.href="?page=pmfa";
				</script>
				<?php
			}
		?>
</div>
	</div>