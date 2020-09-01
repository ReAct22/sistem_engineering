<?php 
	include "../config/koneksi.php";
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
			<option value="" class="bg-warning">Lantai Ground</option>
			<option value="A 01-01">A 01-01</option>
			<option value="A 01-02">A 01-02</option>
			<option value="A 01-04">A 01-04</option>
			<option value="A 01-06">A 01-06</option>
			<option class="bg-warning">Lantai 2</option>
			<option value="A 02-01">A 02-01</option>
			<option value="A 02-02">A 02-02</option>
			<option value="A 02-03">A 02-03</option>
			<option value="A 02-04">A 02-04</option>
			<option value="A 02-05">A 02-05</option>
			<option value="A 02-06">A 02-06</option>
			<option class="bg-warning">Lantai 3</option>
			<option value="A 03-01">A 03-01</option>
			<option value="A 03-02">A 03-02</option>
			<option value="A 03-03">A 03-03</option>
			<option value="A 03-04">A 03-04</option>
			<option value="A 03-05">A 03-05</option>
			<option value="A 03-06">A 03-06</option>
			<option class="bg-warning">Lantai 4</option>
			<option value="A 04-01">A 04-01</option>
			<option value="A 04-02">A 04-02</option>
			<option value="A 04-03">A 04-03</option>
			<option value="A 04-04">A 04-04</option>
			<option value="A 04-05">A 04-05</option>
			<option value="A 04-06">A 04-06</option>
			<option class="bg-warning">Lantai 5</option>
			<option value="A 05-01">A 05-01</option>
			<option value="A 05-02">A 05-02</option>
			<option value="A 05-03">A 05-03</option>
			<option value="A 05-04">A 05-04</option>
			<option value="A 05-05">A 05-05</option>
			<option value="A 05-06">A 05-06</option>
			<option class="bg-warning">Lantai 6</option>
			<option value="A 06-01">A 06-01</option>
			<option value="A 06-02">A 06-02</option>
			<option value="A 06-03">A 06-03</option>
			<option value="A 06-04">A 06-04</option>
			<option value="A 06-05">A 06-05</option>
			<option value="A 06-06">A 06-06</option>
			<option class="bg-warning">Lantai 7</option>
			<option value="A 07-01">A 07-01</option>
			<option value="A 07-02">A 07-02</option>
			<option value="A 07-03">A 07-03</option>
			<option value="A 07-04">A 07-04</option>
			<option value="A 07-05">A 07-05</option>
			<option value="A 07-06">A 07-06</option>
			<option class="bg-warning">Lantai 8</option>
			<option value="A 08-01">A 08-01</option>
			<option value="A 08-02">A 08-02</option>
			<option value="A 08-03">A 08-03</option>
			<option value="A 08-04">A 08-04</option>
			<option value="A 08-05">A 08-05</option>
			<option value="A 08-06">A 08-06</option>
			<option class="bg-warning">Lantai 9</option>
			<option value="A 09-01">A 09-01</option>
			<option value="A 09-02">A 09-02</option>
			<option value="A 09-03">A 09-03</option>
			<option value="A 09-04">A 09-04</option>
			<option value="A 09-05">A 09-05</option>
			<option value="A 09-06">A 09-06</option>
			<option class="bg-warning">Lantai 10</option>
			<option value="A 10-01">A 10-01</option>
			<option value="A 10-02">A 10-02</option>
			<option value="A 10-03">A 10-03</option>
			<option value="A 10-04">A 10-04</option>
			<option value="A 10-05">A 10-05</option>
			<option value="A 10-06">A 10-06</option>
			<option class="bg-warning">Lantai 11</option>
			<option value="A 11-01">A 11-01</option>
			<option value="A 11-02">A 11-02</option>
			<option value="A 11-03">A 11-03</option>
			<option value="A 11-04">A 11-04</option>
			<option value="A 11-05">A 11-05</option>
			<option value="A 11-06">A 11-06</option>
			<option class="bg-warning">Lantai 12</option>
			<option value="A 12-01">A 12-01</option>
			<option value="A 12-02">A 12-02</option>
			<option value="A 12-03">A 12-03</option>
			<option value="A 12-04">A 12-04</option>
			<option value="A 12-05">A 12-05</option>
			<option value="A 12-06">A 12-06</option>
			<option class="bg-warning">Lantai 13</option>
			<option value="A 13-01">A 13-01</option>
			<option value="A 13-02">A 13-02</option>
			<option value="A 13-03">A 13-03</option>
			<option value="A 13-04">A 13-04</option>
			<option value="A 13-05">A 13-05</option>
			<option value="A 13-06">A 13-06</option>
			<option class="bg-warning">Lantai 14</option>
			<option value="A 14-01">A 14-01</option>
			<option value="A 14-02">A 14-02</option>
			<option value="A 14-03">A 14-03</option>
			<option value="A 14-04">A 14-04</option>
			<option value="A 14-05">A 14-05</option>
			<option value="A 14-06">A 14-06</option>
			<option class="bg-warning">Lantai 15</option>
			<option value="A 15-01">A 15-01</option>
			<option value="A 15-02">A 15-02</option>
			<option value="A 15-03">A 15-03</option>
			<option value="A 15-04">A 15-04</option>
			<option value="A 15-05">A 15-05</option>
			<option value="A 15-06">A 15-06</option>
			<option class="bg-warning">Lantai 16</option>
			<option value="A 16-01">A 16-01</option>
			<option value="A 16-02">A 16-02</option>
			<option value="A 16-03">A 16-03</option>
			<option value="A 16-04">A 16-04</option>
			<option value="A 16-05">A 16-05</option>
			<option value="A 16-06">A 16-06</option>
			<option class="bg-warning">Lantai 17</option>
			<option value="A 17-01">A 17-01</option>
			<option value="A 17-02">A 17-02</option>
			<option value="A 17-03">A 17-03</option>
			<option value="A 17-04">A 17-04</option>
			<option value="A 17-05">A 17-05</option>
			<option value="A 17-06">A 17-06</option>
			<option class="bg-warning">Lantai PH</option>
			<option value="A PH-01">A PH-01</option>
			<option value="A PH-02">A PH-02</option>
			<option value="A PH-03">A PH-03</option>
			<option value="A PH-04">A PH-04</option>
			<option>Select Unit Tower B</option>
			<option value="" class="bg-warning">Lantai Ground</option>
			<option value="B 01-01">B 01-01</option>
			<option value="B 01-02">B 01-02</option>
			<option value="B 01-04">B 01-04</option>
			<option value="B 01-06">B 01-06</option>
			<option class="bg-warning">Lantai 2</option>
			<option value="B 02-01">B 02-01</option>
			<option value="B 02-02">B 02-02</option>
			<option value="B 02-03">B 02-03</option>
			<option value="B 02-04">B 02-04</option>
			<option value="B 02-05">B 02-05</option>
			<option value="B 02-06">B 02-06</option>
			<option class="bg-warning">Lantai 3</option>
			<option value="B 03-01">B 03-01</option>
			<option value="B 03-02">B 03-02</option>
			<option value="B 03-03">B 03-03</option>
			<option value="B 03-04">B 03-04</option>
			<option value="B 03-05">B 03-05</option>
			<option value="B 03-06">B 03-06</option>
			<option class="bg-warning">Lantai 4</option>
			<option value="B 04-01">B 04-01</option>
			<option value="B 04-02">B 04-02</option>
			<option value="B 04-03">B 04-03</option>
			<option value="B 04-04">B 04-04</option>
			<option value="B 04-05">B 04-05</option>
			<option value="B 04-06">B 04-06</option>
			<option class="bg-warning">Lantai 5</option>
			<option value="B 05-01">B 05-01</option>
			<option value="B 05-02">B 05-02</option>
			<option value="B 05-03">B 05-03</option>
			<option value="B 05-04">B 05-04</option>
			<option value="B 05-05">B 05-05</option>
			<option value="B 05-06">B 05-06</option>
			<option class="bg-warning">Lantai 6</option>
			<option value="B 06-01">B 06-01</option>
			<option value="B 06-02">B 06-02</option>
			<option value="B 06-03">B 06-03</option>
			<option value="B 06-04">B 06-04</option>
			<option value="B 06-05">B 06-05</option>
			<option value="B 06-06">B 06-06</option>
			<option class="bg-warning">Lantai 7</option>
			<option value="B 07-01">B 07-01</option>
			<option value="B 07-02">B 07-02</option>
			<option value="B 07-03">B 07-03</option>
			<option value="B 07-04">B 07-04</option>
			<option value="B 07-05">B 07-05</option>
			<option value="B 07-06">B 07-06</option>
			<option class="bg-warning">Lantai 8</option>
			<option value="B 08-01">B 08-01</option>
			<option value="B 08-02">B 08-02</option>
			<option value="B 08-03">B 08-03</option>
			<option value="B 08-04">B 08-04</option>
			<option value="B 08-05">B 08-05</option>
			<option value="B 08-06">B 08-06</option>
			<option class="bg-warning">Lantai 9</option>
			<option value="B 09-01">B 09-01</option>
			<option value="B 09-02">B 09-02</option>
			<option value="B 09-03">B 09-03</option>
			<option value="B 09-04">B 09-04</option>
			<option value="B 09-05">B 09-05</option>
			<option value="B 09-06">B 09-06</option>
			<option class="bg-warning">Lantai 10</option>
			<option value="B 10-01">B 10-01</option>
			<option value="B 10-02">B 10-02</option>
			<option value="B 10-03">B 10-03</option>
			<option value="B 10-04">B 10-04</option>
			<option value="B 10-05">B 10-05</option>
			<option value="B 10-06">B 10-06</option>
			<option class="bg-warning">Lantai 11</option>
			<option value="B 11-01">B 11-01</option>
			<option value="B 11-02">B 11-02</option>
			<option value="B 11-03">B 11-03</option>
			<option value="B 11-04">B 11-04</option>
			<option value="B 11-05">B 11-05</option>
			<option value="B 11-06">B 11-06</option>
			<option class="bg-warning">Lantai 12</option>
			<option value="B 12-01">B 12-01</option>
			<option value="B 12-02">B 12-02</option>
			<option value="B 12-03">B 12-03</option>
			<option value="B 12-04">B 12-04</option>
			<option value="B 12-05">B 12-05</option>
			<option value="B 12-06">B 12-06</option>
			<option class="bg-warning">Lantai 13</option>
			<option value="B 13-01">B 13-01</option>
			<option value="B 13-02">B 13-02</option>
			<option value="B 13-03">B 13-03</option>
			<option value="B 13-04">B 13-04</option>
			<option value="B 13-05">B 13-05</option>
			<option value="B 13-06">B 13-06</option>
			<option class="bg-warning">Lantai 14</option>
			<option value="B 14-01">B 14-01</option>
			<option value="B 14-02">B 14-02</option>
			<option value="B 14-03">B 14-03</option>
			<option value="B 14-04">B 14-04</option>
			<option value="B 14-05">B 14-05</option>
			<option value="B 14-06">B 14-06</option>
			<option class="bg-warning">Lantai 15</option>
			<option value="B 15-01">B 15-01</option>
			<option value="B 15-02">B 15-02</option>
			<option value="B 15-03">B 15-03</option>
			<option value="B 15-04">B 15-04</option>
			<option value="B 15-05">B 15-05</option>
			<option value="B 15-06">B 15-06</option>
			<option class="bg-warning">Lantai 16</option>
			<option value="B 16-01">B 16-01</option>
			<option value="B 16-02">B 16-02</option>
			<option value="B 16-03">B 16-03</option>
			<option value="B 16-04">B 16-04</option>
			<option value="B 16-05">B 16-05</option>
			<option value="B 16-06">B 16-06</option>
			<option class="bg-warning">Lantai 17</option>
			<option value="B 17-01">B 17-01</option>
			<option value="B 17-02">B 17-02</option>
			<option value="B 17-03">B 17-03</option>
			<option value="B 17-04">B 17-04</option>
			<option value="B 17-05">B 17-05</option>
			<option value="B 17-06">B 17-06</option>
			<option class="bg-warning">Lantai PH</option>
			<option value="B PH-01">B PH-01</option>
			<option value="B PH-02">B PH-02</option>
			<option value="B PH-03">B PH-03</option>
			<option value="B PH-04">B PH-04</option>
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