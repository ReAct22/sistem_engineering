<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/sistem_engineering/admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/sistem_engineering/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Complaine Online</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Compline</h6>
            <a class="collapse-item" href="?page=">Sipil</a>
            <a class="collapse-item" href="?page=">ME</a>
            <a class="collapse-item" href="?page=">AC</a>
            <h6 class="collapse-header">Data Pemakaian</h6>
            <a class="collapse-item" href="?page=">Data Air</a>
            <a class="collapse-item" href="?page=">Data Listrik</a>
            <h6 class="collapse-header">Data Pencatatan</h6>
            <a class="collapse-item" href="?page=pc_dcair">Data Air</a>
            <a class="collapse-item" href="?page=pc_dclistrik">Data Listrik</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Utilities:</h6>
            <a class="collapse-item" href="?page=elektrical">Electrical</a>
            <a class="collapse-item" href="?page=lift">Lift</a>
            <a class="collapse-item" href="?page=ac_pa">AC Public Area</a>
            <a class="collapse-item" href="?page=generator">Generator Set</a>
            <a class="collapse-item" href="?page=du_trafo">Trafo</a>
            <a class="collapse-item" href="?page=pompa">Pompa</a>
            <a class="collapse-item" href="?page=dume">ME</a>
          </div>
        </div>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Preventif Maintenance</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bulanan</h6>
            <a class="collapse-item" href="?page=bulanan">PM AC Pubic Area</a>
            <a class="collapse-item" href="?page=acten">PM AC Tenant</a>
            <a class="collapse-item" href="?page=pmlift">PM Lift</a>
            <a class="collapse-item" href="?page=pm_stp">PM STP</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">3 Bulanan:</h6>
            <a class="collapse-item" href="?page=3bulan">PM Elektrical</a>
            <a class="collapse-item" href="?page=pmfa">PM Fire Alarm</a>
            <a class="collapse-item" href="?page=pm_mecha">PM Mechanical</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">6 Bulanan:</h6>
            <a class="collapse-item" href="?page=6bulan">PM GWT</a>
            <a class="collapse-item" href="?page=preasure_fan">PM Preasure Fan</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Tahunan</h6>
            <a class="collapse-item" href="?page=pm_pt">PM PANLE TM</a>
            <a class="collapse-item" href="?page=pm_trafo">PM TRAFO</a>
            <a class="collapse-item" href="?page=pm_pl">PM PANEL LVMDP</a>
            <a class="collapse-item" href="?page=pm_geset">PM GESET</a>
            <a class="collapse-item" href="?page=pm_ps">PM POOL SANDFILTER</a>
            <a class="collapse-item" href="?page=pm_infrared">PM INFRARED</a>
            <a class="collapse-item" href="?page=pm_tu">PM TES UDARA</a>
            <a class="collapse-item" href="?page=pm_rt">PM ROOF TANK</a>
            <a class="collapse-item" href="?page=pm_gt">PM GROUND TANK</a>
          </div>
        </div>
      </li>

      <div class="sidebar-heading">
        Data Karyawan
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?page=data_ke">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Karyawan</span></a>
      </li>
       <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

       <div class="sidebar-heading">
        Data Akun
      </div>

      <li class="nav-item">
        <a class="nav-link" href="?page=data_ke">
          <i class="fas fa-fw fa-user"></i>
          <span>Data staff</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=data_ke">
          <i class="fas fa-fw fa-user"></i>
          <span>Data staff</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


          

          <!-- Content Row -->


            <?php 
$page = @$_GET['page'];

if($page == ""){
  include "views/beranda.php";
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
}else if($page == "du_trafo"){
  include "views/data_dutrafo.php";
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
}else if($page == "tambah_dutrafo"){
  include "views/tambah_dutrafo.php";
}else if($page == "edit_dutrafo"){
  include "views/edit_dutrafo.php";
}else if($page == "delete_dutrafo"){
  include "views/hapus_dutrafo.php";
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
  include "print_data/print_pmel.php";
}else if($page == "print_pmfa"){
  include "print_data/print_pmmecha.php";
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
}else if($page == "pmfa"){
  include "data/pm_fire.php";
}else if($page == "pc_dcair"){
  include "catatan/data_dcair.php";
}else if($page == "tambah_dcair"){
  include "catatan/tambah_dcair.php";
}else if($page == "edit_dcair"){
  include "catatan/edit_dcair.php";
}else if($page == "delete_air"){
  include "catatan/hapus_dcair.php";
}else if($page == "pc_dclistrik"){
  include "catatan/data_dclistrik.php";
}else if($page == "tambah_dclistrik"){
  include "catatan/tambah_dclistrik.php";
}else if($page == "edit_dclistrik"){
  include "catatan/edit_dclistrik.php";
}else if($page == "delete_dclistrik"){
  include "catatan/hapus_dclistrik.php";
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
}else if($page == "dume"){
  include "views/data_dume.php";
}else if($page == "tambah_dume"){
  include "views/tambah_dume.php";
}else if($page == "edit_dume"){
  include "views/edit_dume.php";
}else if($page == "delete_dume"){
  include "views/hapus_dume.php";
}else if($page == "pm_stp"){
  include "views/data_stp.php";
}else if($page == "tambah_stp"){
  include "views/tambah_stp.php";
}else if($page == "edit_pmacpa"){
  include "data/edit_pmacpa.php";
}else if($page == "delete_pmacpa"){
  include "data/hapus_pmacpa.php";
}else if($page == "edit_acten"){
  include "data/edit_acten.php";
}else if($page == "delete_acten"){
  include "data/hapus_acten.php";
}else if($page == "edit_pmlift"){
  include "data/edit_pmlift.php";
}else if($page == "delete_pmlift"){
  include "data/hapus_pmlift.php";
}else if($page == "edit_stp"){
  include "data/edit_stp.php";
}else if($page == "delete_stp"){
  include "data/hapus_stp.php";
}else{
  include "views/404.php";
}
?>     

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
