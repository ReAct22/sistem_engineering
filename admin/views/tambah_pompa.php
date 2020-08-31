<?php 
include "config/koneksi.php";
$query = mysqli_query($koneksi,"select max(id_pompa) as kodePompat from du_pompa");
		$data = mysqli_fetch_array($query);
		$kodePompat = $data['kodePompat'];

		$urutan = (int) substr($kodePompat, 3, 3);

		$urutan++;

		$huruf = "DUP";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Pompa</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Utilitas</span>
	  </div>
			<input type="text" name="no_utili" class="form-control" value="<?php echo $kodeData; ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Utilitas</span>
	  </div>
			<input type="text" name="nama_utili" class="form-control" placeholder="Nama Utilitas">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi Utilitas</span>
	  </div>
			<input type="text" name="lokasi_utili" class="form-control" placeholder="Lokasi Utilitas">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jumlah</span>
	  </div>
			<input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
			<textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
			</div>
			<input type="submit" name="tambah" class="w3-bar-item w3-button w3-green">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
		$no = @$_POST['no_utili'];
		$nama_utili = @$_POST['nama_utili'];
		$lokasi = @$_POST['lokasi_utili'];
		$jumlah = @$_POST['jumlah'];
		$keterangan = @$_POST['keterangan'];

		$tambah_data = @$_POST['tambah'];
		if($tambah_data){
			if($no == "" || $nama_utili == "" || $lokasi == "" || $jumlah == "" || $keterangan == ""){
				echo "Inputa tidak boleh kosong";
			}else{
				mysqli_query($koneksi,"insert into du_pompa values('$no','$nama_utili','$lokasi','$jumlah', '$keterangan')");
				?>
				<script type="text/javascript">
					alert("Data berhasil di tambahkan");
					window.location.href="?page=pompa";
				</script>
				<?php
			}
		}
		?>
	</div>
</div>