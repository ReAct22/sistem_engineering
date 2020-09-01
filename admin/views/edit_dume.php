<?php 
include "config/koneksi.php";
	
?>
<div style="margin-left: 30px;">
	<h2>Tambah Data ME</h2>
	<?php 
	$idme = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from du_me where id_me = '$idme' ");
	$data = mysqli_fetch_array($sql);
	?>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No. Utilitas</span>
	  </div>
			<input type="text" name="no_utili" disabled="disabled" class="form-control" value="<?php echo $data['id_me'] ?>">
			</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Name Equipment</span>
	  </div>
			<input type="text" name="nama_utili" class="form-control" value="<?php echo $data['nama_equipment'] ?>">
			</div>

<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Lokasi Utilitas</span>
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
	  <span class="input-group-text">Spesifikasi</span>
	  </div>
			<textarea class="form-control" name="keterangan" rows="3" placeholder="Spesifikasi"><?php echo $data['spesifikasi'] ?></textarea>
			</div>
			<input type="submit" name="edit" value="Update" class="w3-bar-item w3-button w3-green">
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
				mysqli_query($koneksi,"update du_me set nama_equipment = '$nama_utili', lokasi_utilitas = '$lokasi', jumlah = '$jumlah',spesifikasi = '$keterangan' where id_me = '$idme'");
				?>
				<script type="text/javascript">
					alert("Update data Success");
					window.location.href="?page=dume";
				</script>
				<?php
		}
		?>
	</div>
</div>