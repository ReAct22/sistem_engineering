<?php 
@session_start();
include "../config/koneksi.php";
if(@$_SESSION['relasi']){
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
     
      <a href="?page=data_tenant" class="w3-bar-item w3-button">Data Tenant</a>
      <a href="?page=data_p_tenant" class="w3-bar-item w3-button">Data Penanggung Jawab Tenant</a>
      <a href="?page=data_pjp" class="w3-bar-item w3-button">Data Penanggung Jawab Pemilik</a>
    <?php 
  if(@$_SESSION['relasi']){
    $user_login = @$_SESSION['relasi'];
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

}else if($page == "data_tenant"){
  include "views/data_tenant.php";
}else if($page == "tambah_tenant"){
  include "views/tambah_tenant.php";
}else if($page == "data_p_tenant"){
  include "views/data_p_tenant.php";
}else if($page == "tambah_p_tenant"){
  include "views/tambah_p_tenant.php";
}else if($page == "data_pjp"){
  include "views/data_pjp.php";
}else if($page == "tambah_pjp"){
  include "views/tambah_pjp.php";
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
