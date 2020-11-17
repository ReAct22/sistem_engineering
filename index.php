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
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/sistem_engineering" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="keuangan/" class="w3-bar-item w3-button">Dept Keuangan</a>
      <a href="house_kepping/login.php" class="w3-bar-item w3-button">Dept House Kepping</a>
      <a href="front_office/" class="w3-bar-item w3-button">Front Office</a>
      <a href="compline_online/login.php" class="w3-bar-item w3-button">Compline Online</a>
      <a href="businis_line/login.php" class="w3-bar-item w3-button">Maintenant</a>
      <a href="?page=contact" class="w3-bar-item w3-button">Contact</a>
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
}else{
	include "views/404.php";
}
?>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16" style="margin-top: 30px;">
  <p>Copyright &copy; 2020</p>
</footer>
</body>
</html>