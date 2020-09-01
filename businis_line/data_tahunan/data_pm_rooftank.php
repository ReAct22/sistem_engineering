<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=pm_pt" class="w3-bar-item w3-button">PM PANLE TM</a>
		<a href="?page=pm_trafo" class="w3-bar-item w3-button">PM TRAFO</a>
		<a href="?page=pm_pl" class="w3-bar-item w3-button">PM PANEL LVMDP</a>
		<a href="?page=pm_geset" class="w3-bar-item w3-button">PM GESET</a>
		<a href="?page=pm_ps" class="w3-bar-item w3-button">PM POOL SANDFILTER</a>
		<a href="?page=pm_infrared" class="w3-bar-item w3-button">PM INFRARED</a>
		<a href="?page=pm_tu" class="w3-bar-item w3-button">PM TES UDARA</a>
		<a href="?page=pm_rt" class="w3-bar-item w3-button">PM ROOF TANK</a>
		<a href="?page=pm_gt" class="w3-bar-item w3-button">PM GROUND TANK</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE ROOF TANK</h1>
	<a href="?page=tambah_rt" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="print_data/print_rt.php" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

	<form action="" method="post" class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right; margin-right: 50px;">
            <div class="input-group">
              <input type="text" name="cari" class="form-control bg-light border-1 mb-3 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" name="cari_barang" class="btn btn-primary mb-3" value="cari">
              </div>
            </div>
          </form>

	<br>
	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
		<tr>
			<th>No.</th>
			<th>Periode Preventif</th>
			<th>Nama Utilitas</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkarjaan</th>
			<th>Nama Teknisi</th>
			<th>Jenis Perkerjaan</th>
			<th>Foto Perkerjaan</th>
			<th>Rekomendasi</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$no =1;

        $batas = 3;
        $hal = @$_GET['hal'];
        if(empty($hal)){
          $posisi = 0;
          $hal = 1;
        }else{
          $posisi = ($hal - 1)*$batas;
        }

		$cari = @$_POST['cari'];
	$cari_barang = @$_POST['cari_barang'];
	if($cari_barang){
		if($cari != ""){
			$sql = mysqli_query($koneksi,"select *from pm_rt where id_rt like '%$cari%' or nama_utilitas like '%$cari%' or lokasi_utilitas like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_rt");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_rt LIMIT $posisi, $batas");
	}

	$cek = mysqli_num_rows($sql);
	if($cek < 1){
		?>
			<tr>
				<td colspan="11" style="padding: 10px; text-align: center;">Data Tidak Ditemukan</td>
			</tr>
		<?php
	}else{
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id_rt']; ?></td>
			<td><?php echo $data['periode'] ?></td>
			<td><?php echo $data['nama_utilitas'] ?></td>
			<td><?php echo $data['lokasi_utilitas'] ?></td>
			<td><?php echo date('d-m-y', strtotime($data['rencana'])) ?></td>
			<td><?php echo date('d-m-y', strtotime($data['realisasi'])) ?></td>
			<td><?php echo $data['nama_teknisi'] ?></td>
			<td><?php echo $data['jenis_kerjaan'] ?></td>
			<td><img src="../assets/img/<?php echo $data['gambar'] ?>" width="100" ></td>
			<td><?php echo $data['rekomendasi'] ?></td>
			<td>
				<a href="?page=edit_rt&id=<?php echo $data['id_rt']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_rt&id=<?php echo $data['id_rt']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</a>
			</td>
		</tr>
		<?php 
			}
		}
		?>
	</table>
		<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_rt"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=pm_rt&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
</div>