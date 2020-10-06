<h3 class="ml-3" style="margin-top: 70px;">Add Security</h3>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NIK Security</span>
	  </div>
		<input type="text" name="nik_s" class="form-control">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Nama</span>
	  </div>
		<input type="text" name="nama" class="form-control" >
	</div>


	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tempat Lahir</span>
	  </div>
		<input type="text" name="lahir" class="form-control">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Tanggal Lahir</span>
	  </div>
		<input type="date" name="tgl_lahir" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">TMT</span>
	  </div>
		<input type="date" name="tmt" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">TB</span>
	  </div>
		<input type="text" name="tb" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">BB</span>
	  </div>
		<input type="text" name="BB" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NIK KTP</span>
	  </div>
		<input type="text" name="nik" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Alamat</span>
	  </div>
		<textarea rows="3" class="form-control" name="alamat"></textarea>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Agama</span>
	  </div>
		<input type="text" name="agama" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Pendidikan Terakhir</span>
	  </div>
		<select name="pendidikan" class="form-control">
			<option value="SMA">SMA</option>
			<option value="D3">D3</option>
			<option value="S1">S1</option>
			<option value="S2">S2</option>
			<option value="S3">S3</option>
		</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">NO. Handphone</span>
	  </div>
		<input type="text" name="no_tlp" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Jabatan</span>
	  </div>
		<input type="text" name="jabatan" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Status</span>
	  </div>
		<input type="text" name="status" class="form-control" >
	</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
	</div>
	
</form>
<?php 
$nik_s = @$_POST['nik_s'];
$nama = @$_POST['nama'];
$lahir = @$_POST['lahir'];
$tgl_lahir = @$_POST['tgl_lahir'];
$tmt = @$_POST['tmt'];
$tb = @$_POST['tb'];
$bb = @$_POST['bb'];
$nik = @$_POST['nik'];
$alamat = @$_POST['alamat'];
$agama = @$_POST['agama'];
$pendidikan = @$_POST['pendidikan'];
$no_tlp = @$_POST['no_tlp'];
$jabatan = @$_POST['jabatan'];
$status = @$_POST['status'];
$tambah_data = @$_POST['tambah'];


	echo $nik_s;
	echo $nama;
	echo $lahir;
	echo $tgl_lahir;
	echo $tmt;
	echo $tb;
	echo $bb;
	echo $nik;
	echo $alamat;
	echo $agama;
	echo $pendidikan;
	echo $no_tlp;
	echo $jabatan;
	echo $status;


?>


