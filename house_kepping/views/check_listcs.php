<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Check List</h3>
<br>
<a href="?page=tambah_checklistcs" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
<!-- <a href="?page=print_ac" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a> -->

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
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>No Check List</th>
		<th>Floor</th>
		<th>Deskripsi Floor</th>
		<th>Jenis Perkerjaan</th>
		<th>Kondisi</th>
		<th>Action by</th>
		<th>Nama petugas</th>
		<th>Catatan</th>
		<th>Target/realisasi</th>
		<th>Keterangan</th>
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
			$sql = mysqli_query($koneksi,"select *from hk_cl where no_check like '%$cari%' or floor like '%$cari%' or nama_petugas like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from hk_cl");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from hk_cl LIMIT $posisi, $batas");
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
		<td><?php echo $data['no_check'] ?></td>
		<td><?php echo $data['floor'] ?></td>
		<td><?php echo $data['desk_floor'] ?></td>
		<td><?php echo $data['perkerjaan'] ?></td>
		<td><?php echo $data['kondisi'] ?></td>
		<td><?php echo $data['action_by'] ?></td>
		<td><?php echo $data['nama_petugas'] ?></td>
		<td><?php echo $data['catatan'] ?></td>
		<td><?php echo $data['target'] ?></td>
		<td><?php echo $data['keterangan'] ?></td>
	</tr>
	<?php 
			}
	}
	?>
</table>
	<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from hk_cl"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=check_listcs&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
</div>
</div>