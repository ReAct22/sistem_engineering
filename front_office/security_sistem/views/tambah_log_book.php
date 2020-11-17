<?php 
include "../config/koneksi.php";
$query = mysqli_query($koneksi,"select max(id_log_book) as kodeSipil from d_log_book");
		$data = mysqli_fetch_array($query);
		$kodeSipil = $data['kodeSipil'];

		$urutan = (int) substr($kodeSipil, 3, 3);

		$urutan++;

		$huruf = "NLB";
		$kodeData = $huruf.sprintf("%03s", $urutan);
?>
<h3 class="ml-3" style="margin-top: 70px;">Add Log Book</h3>
<form action="" method="post">
	<div class="card-body">
		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">No Log Book</span>
	  </div>
		<input type="text" name="no_lb" class="form-control" value="<?php echo $kodeData; ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Name</span>
	  </div>
		<input type="text" name="nama" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Date</span>
	  </div>
		<input type="date" name="tgl" class="form-control" value="<?php echo date('Y-m-d') ?>">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Document</span>
	  </div>
		<input type="text" name="document" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Package</span>
	  </div>
		<input type="text" name="package" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Unit Key</span>
	  </div>
		<input type="text" name="unit_key" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Inventori Key</span>
	  </div>
		<input type="text" name="inventori_key" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Acces Card</span>
	  </div>
		<input type="text" name="acces_card" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Car Keys</span>
	  </div>
		<input type="text" name="car_key" class="form-control" >
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">L/F</span>
	  </div>
		<select name="l" class="form-control">
			<option value="L">L</option>
			<option value="F">F</option>
		</select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Payment</span>
	  </div>
		<input type="text" name="payment" class="form-control" >
	</div>

		<div class="input-group mb-3">
	  <div class="input-group-prepend">
	  <span class="input-group-text">Message</span>
	  </div>
		<input type="text" name="message" class="form-control" >
		</div>

		<input type="submit" name="tambah" class="btn btn-md btn-success" value="Send">
		<input type="reset" name="" class="btn btn-md btn-danger" value="Cancel">
	</div>
	
</form>
<?php 
$no_lb = @$_POST['no_lb'];
$nama = @$_POST['nama'];
$tgl = @$_POST['tgl'];
$document = @$_POST['document'];
$package = @$_POST['package'];
$unit_key = @$_POST['unit_key'];
$inventori_key = @$_POST['inventori_key'];
$acces_card = @$_POST['acces_card'];
$car_key = @$_POST['car_key'];
$l = @$_POST['l'];
$payment = @$_POST['payment'];
$message = @$_POST['message'];

$tambah_data = @$_POST['tambah'];
if($tambah_data){
	if($no_lb == "" || $nama == "" || $tgl == "" || $document == "" || $package == "" || $unit_key == "" || $inventori_key == "" || $acces_card == "" || $car_key == "" || $l == "" || $payment == "" || $message == ""){
		?>
			<script type="text/javascript">
				alert("Data tidak boleh ada yang kosong");
			</script>
		<?php
	}else{
		mysqli_query($koneksi,"insert into d_log_book values('$no_lb','$nama','$tgl','$document','$package','$unit_key','$inventori_key','$acces_card','$car_key','$l','$payment','$message')");
		?>
			<script type="text/javascript">
				alert("Data berhasil ditambahkan");
				window.location.href="?page=log_book";
			</script>
		<?php
	}
}

?>
