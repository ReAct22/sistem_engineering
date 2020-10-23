<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(no_job) as kodeUtilitas from jb_cs");
		$data = mysqli_fetch_array($query);
		$kodeUtilitas = $data['kodeUtilitas'];

		$urutan = (int) substr($kodeUtilitas, 3, 3);

		$urutan++;

		$huruf = "JDC";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Electrical</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.JobDeskripsi</span>
	  </div>
			<input type="text" name="no_job" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Hari</span>
	  </div>
			<input type="text" name="hari" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal</span>
	  </div>
			<input type="date" name="tanggal" class="form-control">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Waktu Shift</span>
	  </div>
			<select name="waktu_shift" class="form-control">
				<option label="">--  Pilih Shift --</option>
				<option value="Shift 1">Shift 1</option>
				<option value="Shift 2">Shift 2</option>
				<option value="Shift 3">Shift 3</option>
			</select>
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Area</span>
	  </div>
			<select name="area" class="form-control">
				<option label="">-- Pilih Area --</option>
				<option value="Lobby Utama">Lobby Utama</option>
				<option value="Coridor PH-lt.10">Coridor PH-lt.10</option>
				<option value="Coridor">Coridor</option>
				<option value="Coridor 9-Ground">Coridor 9-Ground</option>
				<option value="Halaman">Halaman</option>
				<option value="Swimming Pool">Swimming Pool</option>
				<option value="Basemant">Basemant</option>
				<option value="Lorong Luar">Lorong Luar</option>
				<option value="All Area">All Area</option>
			</select>
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Petugas</span>
	  </div>
			<input type="text" name="petugas" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Uraian Tugas</span>
	  </div>
			<input type="text" name="uraian_tugas" class="form-control">
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Supervisor</span>
	  </div>
			<input type="text" name="supervisor" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Uraian Tugas Supervisor</span>
	  </div>
			<input type="text" name="tugas_supervisor" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Waktu Shift Supervisor</span>
	  </div>
			<select name="shift_supervisor" class="form-control">
				<option label="">--  Pilih Shift --</option>
				<option value="Shift 1">Shift 1</option>
				<option value="Shift 2">Shift 2</option>
				<option value="Shift 3">Shift 3</option>
			</select>
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
			$no_job = @$_POST['no_job'];
			$hari = @$_POST['hari'];
			$tanggal = @$_POST["tanggal"];
			$waktu_shift = @$_POST['waktu_shift'];
			$area = @$_POST['area'];
			$petugas = @$_POST['petugas'];
			$uraian_tugas = @$_POST['uraian_tugas'];
			$supervisor = @$_POST['supervisor'];
			$tugas_supervisor = @$_POST['tugas_supervisor'];
			$shift_supervisor = @$_POST['shift_supervisor'];
			$keterangan = @$_POST['keterangan'];

			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($no_job == "" || $hari == "" || $tanggal == "" || $waktu_shift == "" || $area == "" || $petugas == "" || $uraian_tugas == "" || $supervisor == "" || $tugas_supervisor == "" || $shift_supervisor == "" || $keterangan == ""){
					?>
						<script type="text/javascript">
							alert("Data tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into jb_cs values('$no_job','$hari','$tanggal','$waktu_shift','$area','$petugas','$uraian_tugas','$supervisor','$tugas_supervisor','$shift_supervisor','$keterangan')");
					?>
						<script type="text/javascript">
							alert("Data berhasil di tambah");
							window.location.href="?page=job_deskcs";
						</script>
					<?php 
				}
			}
		 ?>
	</div>
</div>