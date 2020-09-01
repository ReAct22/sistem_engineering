<?php 
	include "../config/koneksi.php";
	$query = mysqli_query($koneksi,"select max(id_pmfa) as kodePM from pm_fa");
		$data = mysqli_fetch_array($query);
		$kodePM = $data['kodePM'];

		$urutan = (int) substr($kodePM, 3, 3);

		$urutan++;

		$huruf = "PMF";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px; margin-top: 20px;">
	<h2>Tambah Data PREVENTIF MAINTENANCE FIRE ALARM</h2>
	<div class="card-body">
		<form action="" method="post">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. PM FIRE ALARM</span>
	  </div>
				<input type="text" name="no_pm" value="<?php echo $kodeData; ?>" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Preventif</span>
	  </div>
				<select name="periode" class="form-control">
					<option></option>
					<option value="3 Bulanan">3 Bulanan</option>
					<option value="6 Bulanan">6 Bulanan</option>
					<option value="Tahunan">Tahunan</option>
				</select>
			</div>
			
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi PM</span>
	  </div>
				<input type="text" name="lokasi_pm" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>
				<select name="unit" class="form-control">
					<option></option>
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
				<input type="text" name="lokasi_utilitas" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Rencana</span>
	  </div>
				<input type="date" name="rencana" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Realisasi</span>
	  </div>
				<input type="date" name="realisasi" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Smoke dan Heat detector</span>
	  </div>
				<select class="form-control" name="break_glass">
					<option>Break Glass</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="bell">
					<option>Bell</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="telphone">
					<option>Telphone</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="box_hydrant">
					<option>Box Hydrant</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
				<select class="form-control" name="sprinkle">
					<option>Sprinkle</option>
					<option value="Baik">Baik</option>
					<option value="Tidak Baik">Tidak Baik</option>
				</select>
			</div>
			<input type="submit" name="tambah" class="btn btn-md btn-success" value="Tambah">
			<input type="reset" name="" class="btn btn-md btn-danger">
		</form>
		<?php 
		$no_pmfa = @$_POST['no_pm'];
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

		$tambah_data = @$_POST['tambah'];
		if($tambah_data){
			if($no_pmfa == "" || $periode == "" || $lokasi_pm == "" || $unit == "" || $lokasi_utilitas == "" || $rencana == "" || $realisasi == ""){
				?>
				<script type="text/javascript">
					alert("Inputan Tidak boleh kosong");
				</script>
				<?php
			}else{
				mysqli_query($koneksi,"insert into pm_fa values('$no_pmfa','$periode','$lokasi_pm','$unit','$lokasi_utilitas','$rencana','$realisasi','$break_glass','$bell','$telphone','$box_hydrant','$sprinkle')");
				?>
				<script type="text/javascript">
					alert("Input Data berhasil");
					window.location.href="?page=pmfa";
				</script>
				<?php
			}
		}
		?>
</div>
	</div>