<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE Lift</h1>
	<a href="?page=tambah_pmlift" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_pmlift" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
				<th>NAMA EQUIPMENT</th>
				<th>LOKASI EQUIPMENT</th>
				<th>NAMA VENDOR</th>
				<th>NAMA TEKNISI</th>
				<th>ALAMAT VENDOR</th>
				<th>PROGRES</th>
				<th>KETERANGAN </th>
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
			$sql = mysqli_query($koneksi,"select *from pm_lift where id_pmlift like '%$cari%' or nama_equipmen like '%$cari%' or lokasi_equipmen like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_lift");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_lift LIMIT $posisi, $batas");
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
				<td><?php echo $data['id_pmlift'] ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_rencana'])) ?></td>
				<td><?php echo date('d-m-y', strtotime($data['tanggal_realisasi'])) ?></td>
				<td><?php echo $data['nama_equipmen'] ?></td>
				<td><?php echo $data['lokasi_equipmen'] ?></td>
				<td><?php echo $data['nama_vendor'] ?></td>
				<td><?php echo $data['nama_teknisi'] ?></td>
				<td><?php echo $data['alamat_vendor'] ?></td>
				<td><?php echo $data['progres'] ?></td>
				<td><?php echo $data['keterangan'] ?></td>
				<td>
					<a href="?page=edit_pmlift&id=<?php echo $data['id_pmlift'] ?>" class="btn btn-sm btn-primary">Edit</a>
					<a href="?page=delete_pmlift&id=<?php echo $data['id_pmlift'] ?>" class="btn btn-sm btn-danger">Delete</a>
				</td>
			</tr>
			<?php 
			}
		}
			?>
		</table>
		<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_lift"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=pmlift&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
</div>