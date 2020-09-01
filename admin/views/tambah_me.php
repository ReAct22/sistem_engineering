<?php 
	include "config/koneksi.php";
?>
<h3 class="ml-3" style="margin-top: 70px;">Insert Compline ME</h3>
<?php 
$query = mysqli_query($koneksi,"select max(id_complaine) as kodeME from co_ME");
		$data = mysqli_fetch_array($query);
		$kodeME = $data['kodeME'];

		$urutan = (int) substr($kodeME, 3, 3);

		$urutan++;

		$huruf = "ME";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO.Complaine</span>
	  </div>
		<input type="text" name="id_complaine" class="form-control" value="<?php echo $kodeData ?>">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Tenant</span>
	  </div>
		<input type="text" name="nama_tenant" class="form-control" placeholder="Insert Name Tenant">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Tower</span>
	  </div>
		<select name="tower" class="form-control">
			<option>Select Tower</option>
			<option value="A">A</option>
			<option value="B">B</option>
		</select>
	</div>
		
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Lantai</span>
	  </div>
		<select name="lantai" class="form-control">
			<option>Select Lantai</option>
			<option value="Ground">Ground</option>
			<option value="Lantai 2">Lantai 2</option>
			<option value="Lantai 3">Lantai 3</option>
			<option value="Lantai 4">Lantai 4</option>
			<option value="Lantai 5">Lantai 5</option>
			<option value="Lantai 6">Lantai 6</option>
			<option value="Lantai 7">Lantai 7</option>
			<option value="Lantai 8">Lantai 8</option>
			<option value="Lantai 9">Lantai 9</option>
			<option value="Lantai 10">Lantai 10</option>
			<option value="Lantai 11">Lantai 11</option>
			<option value="Lantai 12">Lantai 12</option>
			<option value="Lantai 13">Lantai 13</option>
			<option value="Lantai 14">Lantai 14</option>
			<option value="Lantai 15">Lantai 15</option>
			<option value="Lantai 16">Lantai 16</option>
			<option value="Lantai 17">Lantai 17</option>
			<option value="Lantai PH">Lantai PH</option>
		</select>
	</div>
		
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pilih Unit</span>
	  </div>
		<select name="unit" class="form-control">
			<option>Select Unit</option>
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
	  <span class="input-group-text">Compalaine</span>
	  </div>
		<input type="text" name="complaine" class="form-control" placeholder="Insert your Complain">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama Barang</span>
	  </div>
		<input type="text" name="barang" class="form-control" placeholder="insert your item">
		</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Keterangan</span>
	  </div>
		<textarea name="keterangan" rows="3" class="form-control" placeholder="Insert your Description"></textarea>
		</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
	</div>
	
</form>
<?php 
	$id_complaine = @$_POST['id_complaine'];
	$nama_tenant = @$_POST['nama_tenant'];
	$tower = @$_POST['tower'];
	$lantai = @$_POST['lantai'];
	$unit = @$_POST['unit'];
	$complaine = @$_POST['complaine'];
	$barang = @$_POST['barang'];
	$keterangan = @$_POST['keterangan'];

	$tambah_data = @$_POST['tambah'];

	if($tambah_data){
		if($id_complaine == "" || $nama_tenant == "" || $tower == "" || $lantai == "" || $unit == "" || $complaine == "" || $keterangan == ""){
			echo "Data Input tidak boleh kosong";
		}else{
			mysqli_query($koneksi,"insert into co_me values('$id_complaine','$nama_tenant','$tower','$lantai','$unit','$complaine','$barang','$keterangan')");
			?>
			<script type="text/javascript">
				alert("Input Data berhasil");
				window.location.href="?page=me";
			</script>
			<?php
		}
	}

?>