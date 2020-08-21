<?php 
include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Electrical</h2>
	<?php 
	$idlift = @$_GET['idlift'];
	$sql = mysqli_query($koneksi,"select *from du_lift where id_lift = '$idlift'");
	$data = mysqli_fetch_array($sql)
	?>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Utilitas</span>
	  </div>
			<input type="text" name="no_utili" class="form-control" value="<?php echo $data['id_lift'] ?>" disabled="disabled">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama</span>
	  </div>
			<input type="text" name="nama_utili" class="form-control" value="<?php echo $data['nama_utilitas'] ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi</span>
	  </div>
			<input type="text" name="lokasi_utili" class="form-control" value="<?php echo $data['lokasi_utilitas'] ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jumlah</span>
	  </div>
			<input type="text" name="jumlah" class="form-control" value="<?php echo $data['jumlah'] ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
			<textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan"><?php echo $data['keterangan'] ?></textarea>
			</div>
			<input type="submit" name="edit" class="w3-bar-item w3-button w3-green" value="Edit">
			<input type="reset" name="" class="w3-bar-item w3-button w3-red">
		</form>
		<!--Aksi untuk insert data di satuin disini-->
		<?php 
		$nama_utili = @$_POST['nama_utili'];
		$lokasi = @$_POST['lokasi_utili'];
		$jumlah = @$_POST['jumlah'];
		$keterangan = @$_POST['keterangan'];

		$edit_data = @$_POST['edit'];
		if($edit_data){
				mysqli_query($koneksi,"update du_lift set nama_utilitas = '$nama_utili', lokasi_utilitas = '$lokasi', jumlah = '$jumlah', keterangan = '$keterangan' where id_lift = '$idlift' ");
				?>
				<script type="text/javascript">
					alert("Data berhasil di perbarui");
					window.location.href="?page=lift";
				</script>
				<?php
			}
		?>
	</div>
</div>