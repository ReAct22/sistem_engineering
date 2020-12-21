<?php 
include "../config/koneksi.php";

?>
<div style="margin-left: 30px;">
	<h2>Tambah Data Perizinan</h2>
	<div class="card-body">
		<form action="" method="post" class="form-group">
			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NIK</span>
	  </div>
			<input type="text" name="nik" class="form-control">
			</div>

	<div class="input-group mb-3">
		  <div class="input-group-prepend">
		  <span class="input-group-text">Nama</span>
		  </div>
				<input type="text" name="nama" class="form-control" >
				</div>

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Departement</span>
	  </div>
			<select class="form-control" name="departement">
				<option label="Select Option">Select Option</option>
				<option value="Departement Tenancy Relation">Departement Tenancy Relation</option>
				<option value="Departement General Affair">Departement General Affair</option>
				<option value="Departement Accounting">Departement Accounting</option>
				<option value="Departement Engineering">Departement Engineering</option>
				<option value="Housekeeping">Housekeeping</option>
			</select>
			</div>

			

			<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jabatan</span>
	  </div>
			<input type="text" name="jabatan" class="form-control" >
			</div>

				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat</span>
	  </div>
			<input type="text" name="alamat" class="form-control" >
			</div>


				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pendidikan</span>
	  </div>
			<input type="text" name="pendidikan" class="form-control" >
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
			$nik = @$_POST['nik'];
			$nama = @$_POST['nama'];
			$departement = @$_POST['departement'];
			$jabatan = @$_POST['jabatan'];
			$alamat = @$_POST['alamat'];
			$pendidikan = @$_POST['pendidikan'];
			$keterangan = @$_POST['keterangan'];

			$tambah_data = @$_POST['tambah'];
			if($tambah_data){
				if($nik == "" || $nama == "" || $departement == "" || $jabatan == "" || $alamat == "" || $pendidikan == "" || $keterangan == ""){
					?>
						<script type="text/javascript">
							alert("Data Tidak boleh ada yang kosong");
						</script>
					<?php
				}else{
					mysqli_query($koneksi,"insert into db_building values('$nik','$nama','$departement','$jabatan','$alamat','$pendidikan','$keterangan')");
					?>
						<script type="text/javascript">
							alert("Data berhasil di input");
							window.location.href="?page=data_build";
						</script>
					<?php
				}
			}
		?>
	</div>
</div>