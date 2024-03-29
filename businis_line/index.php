<?php 
@session_start();
include "../config/koneksi.php";
if(@$_SESSION['engineering']){
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bukit Golf Pondok Indah - Jakarta Selatan</title>
	<link rel="icon" type="image/x-icon" href="img/icon.jpg">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>
<body>
<div>
	<!-- Navbar (sit on top) -->
<div class="">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="/sistem_engineering/businis_line" class="w3-bar-item w3-button"><b>APARTEMENT</b> Bukit Golf Pondok Indah</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <div class="w3-dropdown-hover">
  <button class="w3-button">Data Utilitas</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="?page=elektrical" class="w3-bar-item w3-button">Elektrical</a>
    <a href="?page=lift" class="w3-bar-item w3-button">Lift</a>
    <a href="?page=ac_pa" class="w3-bar-item w3-button">AC Public Area</a>
    <a href="?page=generator" class="w3-bar-item w3-button">Generator Set</a>
    <a href="?page=trafo" class="w3-bar-item w3-button">Trafo</a>
    <a href="?page=pompa" class="w3-bar-item w3-button">Pompa</a>
    <a href="?page=me" class="w3-bar-item w3-button">ME</a>
  </div>
</div>
      <div class="w3-dropdown-hover">
	  <button class="w3-button ">Preventif Maintenance</button>
	  <div class="w3-dropdown-content w3-bar-block w3-border">
		<a href="?page=bulanan" class="w3-bar-item w3-button">Data Bulanan</a>
		<a href="?page=3bulan" class="w3-bar-item w3-button">Data 3 Bulanan</a>
		<a href="?page=6bulan" class="w3-bar-item w3-button">Data 6 Bulanan</a>
		<a href="?page=pm_pt" class="w3-bar-item w3-button">Data Tahunan</a>
	  </div>
	</div>
       <div class="w3-dropdown-hover">
	  <button class="w3-button ">Data Pencatatan</button>
	  <div class="w3-dropdown-content w3-bar-block w3-border">
	    <a href="?page=pc_air" class="w3-bar-item w3-button">Pencatatan Air</a>
	    <a href="?page=pc_listrik" class="w3-bar-item w3-button">Pencatatan Listrik</a>
	  </div>
	</div>
	 <div class="w3-dropdown-hover">
	  <button class="w3-button ">Data Engineering</button>
	  <div class="w3-dropdown-content w3-bar-block w3-border">
	    <a href="?page=data_ke" class="w3-bar-item w3-button">Karyawana Engineering</a>
	  </div>
	</div>
	<div class="w3-dropdown-hover">
  <button class="w3-button">Selamat Datang</button>
  <div class="w3-dropdown-content w3-bar-block w3-border">
  	<?php 
  if(@$_SESSION['engineering']){
    $user_login = @$_SESSION['engineering'];
  }

  $sql_login = mysqli_query($koneksi,"select *from tb_staff where id_staff = '$user_login'");
  $data = mysqli_fetch_array($sql_login);
  ?>
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
}else if($page == "bulanan"){
	include "views/data_bulanan.php";
}else if($page == "elektrical"){
	include "views/data_elektrical.php";
}else if($page == "lift"){
	include "views/data_lift.php";
}else if($page == "ac_pa"){
	include "views/data_acpa.php";
}else if($page == "generator"){
	include "views/data_generator.php";
}else if($page == "trafo"){
	include "views/data_trafo.php";
}else if($page == "pompa"){
	include "views/data_pompa.php";
}else if($page == "tambah_elektrical"){
	include "views/tambah_elektrical.php";
}else if($page == "edit_elektrical"){
	include "views/edit_elektrical.php";
}else if($page == "hapus_elektrical"){
	include "views/hapus_elektrical.php";
}else if($page == "tambah_lift"){
	include "views/tambah_lift.php";
}else if($page == "edit_lift"){
	include "views/edit_lift.php";
}else if($page == "delete_lift"){
	include "views/hapus_lift.php";
}else if($page == "tambah_acpa"){
	include "views/tambah_acpa.php";
}else if($page == "edit_acpa"){
	include "views/edit_acpa.php";
}else if($page == "delete_acpa"){
	include "views/hapus_acpa.php";
}else if($page == "tambah_generator"){
	include "views/tambah_generator.php";
}else if($page == "edit_genset"){
	include "views/edit_genset.php";
}else if($page == "delete_genset"){
	include "views/hapus_genset.php";
}else if($page == "tambah_trafo"){
	include "views/tambah_trafo.php";
}else if($page == "edit_trafo"){
	include "views/edit_trafo.php";
}else if($page == "delete_trafo"){
	include "views/hapus_trafo.php";
}else if($page == "tambah_pompa"){
	include "views/tambah_pompa.php";
}else if($page == "edit_pompa"){
	include "views/edit_pompa.php";
}else if($page == "delete_pompa"){
	include "views/hapus_pompa.php";
}else if($page == "acten"){
	include "data/tenant.php";
}else if($page == "pmlift"){
	include "data/pmlift.php";
}else if($page == "tambah_pmlift"){
	include "data/tambah_pmlift.php";
}else if($page == "tambah_actenant"){
	include "data/tambah_tenant.php";
}else if($page == "tambah_pmac"){
	include "data/tambah_pmac.php";
}else if($page == "3bulan"){
	include "data/data_3bulanan.php";
}else if($page == "tambah_pmelek"){
	include "data/tambah_pmelektrik.php";
}else if($page == "pm_mecha"){
	include "data/pm_mecha.php";
}else if($page == "tambah_mecha"){
	include "data/tambah_pm_mecha.php";
}else if($page == "edit_pmelektrik"){
	include "data/edit_pmelektrik.php";
}else if($page == "edit_mecha"){
	include "data/edit_mecha.php";
}else if($page == "delete_mecha"){
	include "data/hapus_mecha.php";
}else if($page == "delete_pmelektrik"){
	include "data/hapus_elektrik.php";
//Aksi data untuk Print
}else if($page == "print_acpa"){
	include "print_data/print_acpa.php";
}else if($page == "print_elektrical"){
	include "print_data/print_elektrical.php";
}else if($page == "print_lift"){
	include "print_data/print_lift.php";
}else if($page == "print_genset"){
	include "print_data/print_genset.php";
}else if($page == "print_trafo"){
	include "print_data/print_trafo.php";
}else if($page == "print_pompa"){
	include "print_data/print_pompa.php";
}else if($page == "print_pmac"){
	include "print_data/print_pmac.php";
}else if($page == "print_pmtenant"){
	include "print_data/print_pmtenant.php";
}else if($page == "print_pmlift"){
	include "print_data/print_pmlift.php";
}else if($page == "print_pmel"){
	include "print_data/print_pmel.php";
}else if($page == "print_pmmecha"){
	include "print_data/print_pmmecha.php";
}else if($page == "print_pmfa"){
	include "print_data/print_pmfa.php";
}else if($page == "print_pmli"){
	include "print_data/print_pmlift.php";

}else if($page == "print_gwt"){
	include "print_data/print_gwt.php";
//berakhir Sampai Sini
}else if($page == "print_pf"){
	include "print_data/print_pf.php";
//berakhir Sampai Sini
}else if($page == "print_infrared"){
	include "print_data/print_infrared.php";
//berakhir Sampai Sini
}else if($page == "print_pl"){
	include "print_data/print_pl.php";
//berakhir Sampai Sini
}else if($page == "print_geset"){
	include "print_data/print_geset.php";
//berakhir Sampai Sini
}else if($page == "print_gt"){
	include "print_data/print_gt.php";
//berakhir Sampai Sini
}else if($page == "print_rt"){
	include "print_data/print_rt.php";
//berakhir Sampai Sini
}else if($page == "print_pmt"){
	include "print_data/print_pmt.php";
//berakhir Sampai Sini
}else if($page == "print_tu"){
	include "print_data/print_tu.php";
//berakhir Sampai Sini
}else if($page == "print_ps"){
	include "print_data/print_ps.php";
//berakhir Sampai Sini
}
else if($page == "print_pt"){
	include "print_data/print_pt.php";
//berakhir Sampai Sini
}else if($page == "print_dcair"){
	include "print_data/print_dcair.php";
//berakhir Sampai Sini
}else if($page == "print_dclistrik"){
	include "print_data/print_dclistrik.php";
//berakhir Sampai Sini
}else if($page == "print_ke"){
	include "print_data/print_ke.php";
//berakhir Sampai Sini
}else if($page == "print_stp"){
	include "print_data/print_stp.php";
//berakhir Sampai Sini
}else if($page == "print_dume"){
	include "print_data/print_dume.php";
//berakhir Sampai Sini
}else if($page == "pmfa"){
	include "data/pm_fire.php";
}else if($page == "pc_air"){
	include "catatan/data_air.php";
}else if($page == "tambah_air"){
	include "catatan/tambah_air.php";
}else if($page == "edit_air"){
	include "catatan/edit_air.php";
}else if($page == "delete_air"){
	include "catatan/hapus_air.php";
}else if($page == "pc_listrik"){
	include "catatan/data_listrik.php";
}else if($page == "tambah_listrik"){
	include "catatan/tambah_listrik.php";
}else if($page == "edit_listrik"){
	include "catatan/edit_listrik.php";
}else if($page == "delete_listrik"){
	include "catatan/hapus_listrik.php";
}else if($page == "tambah_fa"){
	include "data/tambah_fa.php";
}else if($page == "edit_fa"){
	include "data/edit_fa.php";
}else if($page == "delete_fa"){
	include "data/hapus_fa.php";
}else if($page == "6bulan"){
	include "data/6bulanan.php";
}else if($page == "tambah_gwt"){
	include "data/tambah_gwt.php";
}else if($page == "edit_gwt"){
	include "data/edit_gwt.php";
}else if($page == "delete_gwt"){
	include "data/hapus_gwt.php";
}else if($page == "preasure_fan"){
	include "data/data_preasure_fan.php";
}else if($page == "tambah_preasure_fan"){
	include "data/tambah_preasure_fan.php";
}else if($page == "edit_pf"){
	include "data/edit_pf.php";
}else if($page == "delete_pf"){
	include "data/hapus_pf.php";
}else if($page == "pm_pt"){
	include "data_tahunan/data_panel_tm.php";
}else if($page == "tambah_pt"){
	include "data_tahunan/tambah_pt.php";
}else if($page == "edit_pt"){
	include "data_tahunan/edit_pt.php";
}else if($page == "delete_pt"){
	include "data_tahunan/hapus_pt.php";
}else if($page == "pm_trafo"){
	include "data_tahunan/data_pm_trafo.php";
}else if($page == "tambah_pmtrafo"){
	include "data_tahunan/tambah_pmtrafo.php";
}else if($page == "edit_pmtrafo"){
	include "data_tahunan/edit_pmtrafo.php";
}else if($page == "delete_pmtrafo"){
	include "data_tahunan/hapus_pmtrafo.php";
}else if($page == "pm_pl"){
	include "data_tahunan/data_panel_lvmdp.php";
}else if($page == "tambah_pl"){
	include "data_tahunan/tambah_pl.php";
}else if($page == "edit_pl"){
	include "data_tahunan/edit_pl.php";
}else if($page == "delete_pl"){
	include "data_tahunan/hapus_pl.php";
}else if($page == "pm_geset"){
	include "data_tahunan/data_pm_geset.php";
}else if($page == "tambah_geset"){
	include "data_tahunan/tambah_geset.php";
}else if($page == "edit_geset"){
	include "data_tahunan/edit_geset.php";
}else if($page == "delete_geset"){
	include "data_tahunan/hapus_geset.php";
}else if($page == "pm_ps"){
	include "data_tahunan/data_pool_sandfilter.php";
}else if($page == "tambah_ps"){
	include "data_tahunan/tambah_ps.php";
}else if($page == "edit_ps"){
	include "data_tahunan/edit_ps.php";
}else if($page == "delete_ps"){
	include "data_tahunan/hapus_ps.php";
}else if($page == "pm_infrared"){
	include "data_tahunan/data_infrared.php";
}else if($page == "tambah_infrared"){
	include "data_tahunan/tambah_infrared.php";
}else if($page == "edit_infrared"){
	include "data_tahunan/edit_infrared.php";
}else if($page == "delete_infrared"){
	include "data_tahunan/hapus_infrared.php";
}else if($page == "pm_tu"){
	include "data_tahunan/data_pm_tu.php";
}else if($page == "tambah_tu"){
	include "data_tahunan/tambah_tu.php";
}else if($page == "edit_tu"){
	include "data_tahunan/edit_tu.php";
}else if($page == "delete_tu"){
	include "data_tahunan/hapus_tu.php";
}else if($page == "pm_rt"){
	include "data_tahunan/data_pm_rooftank.php";
}else if($page == "tambah_rt"){
	include "data_tahunan/tambah_rt.php";
}else if($page == "edit_rt"){
	include "data_tahunan/edit_rt.php";
}else if($page == "delete_rt"){
	include "data_tahunan/hapus_rt.php";
}else if($page == "pm_gt"){
	include "data_tahunan/data_pm_gt.php";
}else if($page == "tambah_gt"){
	include "data_tahunan/tambah_gt.php";
}else if($page == "edit_gt"){
	include "data_tahunan/edit_gt.php";
}else if($page == "delete_gt"){
	include "data_tahunan/hapus_gt.php";
}else if($page == "data_ke"){
	include "data_karyawaan/data_ke.php";
}else if($page == "tambah_ke"){
	include "data_karyawaan/tambah_ke.php";
}else if($page == "edit_ke"){
	include "data_karyawaan/edit_ke.php";
}else if($page == "delete_ke"){
	include "data_karyawaan/hapus_ke.php";
}else if($page == "me"){
	include "views/data_me.php";
}else if($page == "tambah_me"){
	include "views/tambah_me.php";
}else if($page == "edit_me"){
	include "views/edit_me.php";
}else if($page == "delete_me"){
	include "views/hapus_me.php";
}else if($page == "pm_stp"){
	include "views/data_stp.php";
}else if($page == "tambah_stp"){
	include "views/tambah_stp.php";
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