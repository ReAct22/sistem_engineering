<?php 
@session_start();
include "../config/koneksi.php";
if(@$_SESSION['office']){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukit Golf Pondok Indah - Jakarta Selatan</title>
	<link rel="icon" type="image/x-icon" href="assets/img/icon.jpg">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>
<body>
<div>
	<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/sistem_engineering/security_sistem" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="?page=log_book" class="w3-bar-item w3-button">Data Log Book</a>
      <a href="security_sistem/login.php" class="w3-bar-item w3-button">Security</a>
    <a href="?page=request" class="w3-bar-item w3-button">Data Request</a>

    <?php 
  if(@$_SESSION['office']){
    $user_login = @$_SESSION['office'];
  }

  $sql_login = mysqli_query($koneksi,"select *from tb_staff where id_staff = '$user_login'");
  $data = mysqli_fetch_array($sql_login);
  ?>
<div class="w3-dropdown-hover">
  <button class="w3-button">Selamat Datang</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="" class="w3-bar-item w3-button"><?php echo $data['nama_staff'] ?></a>
    <a href="?page=air" class="w3-bar-item w3-button">Setting</a>
    <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
  </div>
</div>
    </div>
  </div>
</div>


<!--Contect filt-->
<?php 
$page = @$_GET['page'];

if($page == ""){
	include "views/home.php";
}else if($page == "log_book"){
  include "views/log_book.php";
}else if($page == "tambah_log_book"){
  include "views/tambah_log_book.php";
}else if($page == "request"){
  include "views/request_list.php";
}else if($page == "tambah_request"){
  include "views/tambah_request.php";
}else{
	include "views/404.php";
}
?>

</body>
</html>
<?php 
}else{
  header("location: login.php");
}
?>
