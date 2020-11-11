<?php 
@session_start();
include "../config/koneksi.php";
if(@$_SESSION['gudang']){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukit Golf Pondok Indah - Jakarta Selatan</title>
	<link rel="icon" type="image/x-icon" href="img/icon.jpg">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>
<div>
	<!-- Navbar (sit on top) -->
<div class="">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/sistem_engineering/house_kepping" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="" class="w3-bar-item w3-button">Home</a>

      <div class="w3-dropdown-hover">
      <button class="w3-button ">House Kepping</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?page=check_listcs" class="w3-bar-item w3-button">Check List Cleaning Service</a>
        <a href="?page=job_deskcs" class="w3-bar-item w3-button">Job Desk Cleaning Service</a>
      </div>
    </div>

     <div class="w3-dropdown-hover">
      <button class="w3-button ">Land Scape</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?page=check_listtm" class="w3-bar-item w3-button">Check List Taman</a>
        <a href="?page=job_desktm" class="w3-bar-item w3-button">Job Desk Taman </a>
      </div>
    </div>

      <div class="w3-dropdown-hover">
        <button class="w3-button">Selamat Datang</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="" class="w3-bar-item w3-button">Setting</a>
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
}else if($page == "check_listcs"){
	include "views/check_listcs.php";
}else if($page == "tambah_checklistcs"){
  include "views/tambah_checklistcs.php";
}else if($page == "job_deskcs"){
  include "views/job_deskcs.php";
}else if($page == "tambah_jobdeskcs"){
  include "views/tambah_jobdeskcs.php";
}else if($page == "check_listtm"){
  include "views/check_listtm.php";
}else if($page == "tambah_checklisttm"){
  include "views/tambah_checklisttm.php";
}else if($page == "job_desktm"){
  include "views/job_desktm.php";
}else if($page == "tambah_jobdesktm"){
  include "views/tambah_jobdesktm.php";
}else{
	include "views/404.php";
}
?>
<!-- Footer -->

</body>
</html>
<?php 
}else{
  header("location: login.php");
}
?>