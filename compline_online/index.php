<?php 
session_start();
include "config/koneksi.php";
if(@$_SESSION['username']){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukit Golf Pondok Indah - Jakarta Selatan</title>
	<link rel="icon" type="image/x-icon" href="assets/img/icon.png">
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
    <a href="/sistem_engineering/compline_online" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <div class="w3-dropdown-hover">
  <button class="w3-button ">Compline Online</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="?page=sipil" class="w3-bar-item w3-button">Sipil</a>
    <a href="?page=me" class="w3-bar-item w3-button">ME</a>
    <a href="?page=ac" class="w3-bar-item w3-button">AC</a>
  </div>
</div>
      <div class="w3-dropdown-hover">
  <button class="w3-button">Data Pemakaian</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="?page=air" class="w3-bar-item w3-button">Air</a>
    <a href="?page=listrik" class="w3-bar-item w3-button">Listrik</a>
  </div>
</div>
<div class="w3-dropdown-hover">
  <?php 
  if(@$_SESSION['username']){
    $user_login = @$_SESSION['username'];
  }

  $sql_login = mysqli_query($koneksi,"select *from tb_user where id_user = '$user_login'");
  $data = mysqli_fetch_array($sql_login);
  ?>
  <button class="w3-button">Selamat Datang <?php echo $data['nama_lengkap']; ?></button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
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
}else if($page == "contact"){
	include "views/contact.php";
}else if($page == "sipil"){
	include "views/data_sipil.php";
}else if($page == "tambah_sipil"){
	include "views/tambah_sipil.php";
}else if($page == "me"){
  include "views/data_me.php";
}else if($page == "tambah_me"){
  include "views/tambah_me.php";
}else if($page == "ac"){
  include "views/data_ac.php";
}else if($page == "tambah_ac"){
  include "views/tambah_ac.php";
}else if($page == "air"){
  include "views/data_air.php";
}else if($page == "listrik"){
  include "views/data_listrik.php";
}else if($page == "tambah_air"){
  include "views/tambah_air.php";
}else if($page == "tambah_listrik"){
  include "views/tambah_listrik.php";
}else if($page == "print_sipil"){
  include "print_data/print_sipil.php";
}else if($page == "print_me"){
  include "print_data/print_me.php";
}else if($page == "print_ac"){
  include "print_data/print_ac.php";
}else if($page == "print_air"){
  include "print_data/print_air.php";
}else if($page == "print_listrik"){
  include "print_data/print_listrik.php";
}else{
	include "views/404.php";
}
?>

</body>
</html>
<?php 
}else{
  header("location:login.php");
}
?>