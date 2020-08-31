<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h1 style="margin-left: 30px;">DATA PENCATATAN LISTRIK</h1>
	<a href="?page=tambah_listrik" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="?page=print_dclistrik" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
			<th>No.Cek</th>
			<th>Nomer Unit</th>
			<th>Stand Meter Awal</th>
			<th>Stand Meter Akhir</th>
			<th>Gambar</th>
			<th>Total Pemakaian</th>
			<th>Keterangan</th>
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
				$sql = mysqli_query($koneksi,"select *from dc_listrik where id_listrik like '%$cari%' or unit like '%$cari%'");
			}else{
				$sql = mysqli_query($koneksi,"select *from dc_listrik");
			}
		}else{
			$sql = mysqli_query($koneksi,"select *from dc_listrik LIMIT $posisi, $batas");
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
			<th><?php echo $data['id_listrik'] ?></th>
			<th><?php echo $data['unit'] ?></th>
			<th><?php echo $data['meter_awal'] ?></th>
			<th><?php echo $data['meter_akhir'] ?></th>
			<th><img src="../assets/img/<?php echo $data['gambar'] ?>" width="50" height="50"></th>
			<th><?php echo $data['total'] ?></th>
			<th><?php echo $data['keterangan'] ?></th>
			<th>
				<a href="?page=edit_listrik&idli=<?php echo $data['id_listrik']; ?>" class=" btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_listrik&idli=<?php echo $data['id_listrik']; ?>" class=" btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
			</th>
		</tr>
		<?php 
			}
		}
		?>
	</table>
	<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from dc_listrik"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=pc_listrik&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
</div>