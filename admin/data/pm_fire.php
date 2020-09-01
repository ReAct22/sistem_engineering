<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE FIRE ALARM</h1>
	<a href="?page=tambah_fa" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_pmfa" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
			<th>Lokasi PM</th>
			<th>Nama Unit</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkerjaan</th>
			<th colspan="5" style="text-align: center;">Smoke And Heat Detector</th>
			<th>Opsi</th>
		</tr>

		<tr>
			<th colspan="7"></th>
			<th>Break Glass</th>
			<th>Bell</th>
			<th>Telphone</th>
			<th>Box Hydrant</th>
			<th>Sprinkle</th>
			<th></th>
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
			$sql = mysqli_query($koneksi,"select *from pm_fa where id_pmfa like '%$cari%' or lokasi_pm like '%$cari%' or nama_unit like '%$cari%' or lokasi_utilitas like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_fa");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_fa LIMIT $posisi, $batas");
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
			<td><?php echo $data['id_pmfa'] ?></td>
			<td><?php echo $data['periode'] ?></td>
			<td><?php echo $data['lokasi_pm'] ?></td>
			<td><?php echo $data['nama_unit'] ?></td>
			<td><?php echo $data['lokasi_utilitas'] ?></td>
			<td><?php echo date('d-m-y',strtotime($data['rencana'])) ?></td>
			<td><?php echo date('d-m-y',strtotime($data['realisasi'])) ?></td>
			<td><?php echo $data['break_glass'] ?></td>
			<td><?php echo $data['bell'] ?></td>
			<td><?php echo $data['telphone'] ?></td>
			<td><?php echo $data['box_hydrant'] ?></td>
			<td><?php echo $data['sprinkle'] ?></td>
			<td>
				<a href="?page=edit_fa&id=<?php echo $data['id_pmfa'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_fa&id=<?php echo $data['id_pmfa'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
			</td>
		</tr>
		<?php 
			}
		}
		?>
	</table>
	<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_fa"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=pmfa&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
