<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE STP</h1>
	<a href="?page=tambah_stp" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_pmac" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
				<th>NAMA Equipment</th>
				<th>LOKASI Equipment</th>
				<th>Jenis Kerusakan</th>
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
			$sql = mysqli_query($koneksi,"select *from pm_stp where id_stp like '%$cari%' or nama_stp like '%$cari%' or lokasi_stp like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_stp");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_stp LIMIT $posisi, $batas");
	}

	$cek = mysqli_num_rows($sql);
	if($cek < 1){
		?>
			<tr>
				<td colspan="9" style="padding: 10px; text-align: center;">Data Tidak Ditemukan</td>
			</tr>
		<?php
	}else{
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['id_stp']; ?></td>
				<td><?php echo date('d-m-y', strtotime($data['rencana'])); ?></td>
				<td><?php echo date('d-m-y', strtotime($data['realisasi'])); ?></td>
				<td><?php echo $data['nama_stp']; ?></td>
				<td><?php echo $data['lokasi_stp']; ?></td>
				<td><?php echo $data['jenis_kerusakan']; ?></td>
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
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_stp"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=pm_stp&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
</div>