<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=bulanan" class="w3-bar-item w3-button">Ac Public Area</a>
		<a href="?page=acten" class="w3-bar-item w3-button">Ac Tenant</a>
		<a href="?page=pmlift" class="w3-bar-item w3-button">Lift</a>
		<a href="?page=pm_stp" class="w3-bar-item w3-button">STP</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE AC Public Area</h1>
	<a href="?page=tambah_pmac" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="print_data/print_pmac.php" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
				<th>No. Preventif Maintenance</th>
				<th>TANGGAL RENCANA</th>
				<th>TANGGAL REALISASI</th>
				<th>NAMA AC</th>
				<th>LOKASI AC</th>
				<th>NAMA TEKNISI</th>
				<th>PROGRES</th>
				<th>KETERANGAN </th>
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
			$sql = mysqli_query($koneksi,"select *from pm_acap where id_pmac like '%$cari%' or nama_ac like '%$cari%' or lokasi_ac like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_acap");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_acap LIMIT $posisi, $batas");
	}

	$cek = mysqli_num_rows($sql);
	if($cek < 1){
		?>
			<tr>
				<td colspan="7" style="padding: 10px; text-align: center;">Data Tidak Ditemukan</td>
			</tr>
		<?php
	}else{
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_pmac']; ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_rencana'])); ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_realisasi'])); ?></td>
				<td><?php echo $data['nama_ac']; ?></td>
				<td><?php echo $data['lokasi_ac']; ?></td>
				<td><?php echo $data['nama_teknisi']; ?></td>
				<td><?php echo $data['progres']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
			</tr>
			<?php 
			}
		}
			?>
		</table>
		<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_acap"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=bulanan&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
</div>