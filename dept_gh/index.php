<?php 
// @session_start();
// include "../config/koneksi.php";
// if(@$_SESSION['security']){
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
<div class="">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/sistem_engineering/security_sistem" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <!-- <div class="w3-dropdown-hover">
  <button class="w3-button ">Data</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="?page=security" class="w3-bar-item w3-button">Data Security</a>
    <a href="?page=list_parking" class="w3-bar-item w3-button">Data List Parking</a>

  </div>
</div> -->
     
      <a href="?page=data_izin" class="w3-bar-item w3-button">Data Perizinan</a>
      <a href="?page=data_build" class="w3-bar-item w3-button">Data Bulding Managemant</a>
    <?php 
  // if(@$_SESSION['security']){
  //   $user_login = @$_SESSION['security'];
  // }

  // $sql_login = mysqli_query($koneksi,"select *from tb_staff where id_staff = '$user_login'");
  // $data = mysqli_fetch_array($sql_login);
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
}else if($page == "list_parking"){
  include "views/parking.php";
}else if($page == "data_izin"){
  include "views/data_perizinan.php";
}else if($page == "data_build"){
  include "views/data_build.php";
}else if($page == "tambah_perizinan"){
  include "views/tambah_perizinan.php";
}else if($page == "tambah_build"){
  include "views/tambah_build.php";
}else{
	include "views/404.php";
}

?>

</body>
</html>
<?php 
// }else{
//   header("location: login.php");
// }
?>
