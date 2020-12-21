<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(nomer) as kodeUtilitas from perizinan");
		$data = mysqli_fetch_array($query);
		$kodeUtilitas = $data['kodeUtilitas'];

		$urutan = (int) substr($kodeUtilitas, 3, 3);

		$urutan++;

		$huruf = "DPZ";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Perizinan</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nomer Perizinan</span>
	  </div>
			<input type="text" name="no_izin" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Perizinan</span>
	  </div>
			<select class="form-control" name="izin">
				<option label="Select Option">Select Option</option>
				<option value="Perizinan">Perizinan</option>
				<option value="Kontrak Vendor GA">Kontrak Vendor GA</option>
				<option value="Accounting">Accounting</option>
				<option value="Tenancy Relation">Tenancy Relation</option>
				<option value="Engineering">Engineering</option>
				<option value="Duty Manager">Duty Manager</option>
			</select>
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Data Perizinan</span>
	  </div>
			<input type="text" name="data_perizinan" class="form-control" >
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Hal</span>
	  </div>
			<input type="text" name="hal" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Awal</span>
	  </div>
			<input type="date" name="periode_awal" class="form-control" >
			</div>


				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Periode Akhir</span>
	  </div>
			<input type="date" name="periode_akhir" class="form-control" >
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
			$no_izin = @$_POST['no_izin'];
			$izin = @$_POST['izin'];
			$data_perizinan = @$_POST['data_perizinan'];
			$hal = @$_POST['hal'];
			$periode_awal = @$_POST['periode_awal'];
			$periode_akhir = @$_POST['periode_akhir'];
			$keterangan = @$_POST['keterangan'];

			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($no_izin == "" || $izin == "" || $data_perizinan == "" || $hal == "" || $periode_awal == "" || $periode_akhir == "" || $keterangan == ""){
					?>
						<script type="text/javascript">
							alert("Data Tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into perizinan values('$no_izin','$izin','$data_perizinan','$hal','$periode_awal','$periode_akhir','$keterangan')");
					?>
						<script type="text/javascript">
							alert("Data berhasil di input");
							window.location.href="?page=data_izin";
						</script>
					<?php
				}
			}
		?>
	</div>
</div>