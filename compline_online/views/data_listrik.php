<?php 
include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Pemakaian Listrik</h3>
<br>
<a href="?page=tambah_listrik" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
<a href="?page=print_listrik" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>
<form action="" method="post" class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right; margin-right: 50px;">
            <div class="input-group">
              <input type="text" name="inputan_pencarian" class="form-control bg-light border-1 mb-3 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" name="cari_data" class="btn btn-primary mb-3" value="cari">
              </div>
            </div>
          </form>
<br>
<div class="card-body">
	<table border="1" align="center" class="w3-table w3-striped">
	<tr>
		<th>Nomer Cek</th>
		<th>Nomer Unit</th>
		<th>Stand Meter Awal</th>
		<th>Stand Meter Akhir</th>
		<th>Gambar</th>
		<th>Total Pemakaian</th>
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

	$inputan_pencarian = @$_POST['inputan_pencarian'];
	$cari_data = @$_POST['cari_data'];
	if($cari_data){  
		if($inputan_pencarian != ""){
			$sql = mysqli_query($koneksi,"select *from dp_listrik where id_cek like '%$inputan_pencarian%' or unit like '%$inputan_pencarian%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from dp_listrik");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from dp_listrik LIMIT $posisi, $batas");
	}

	$cek = mysqli_num_rows($sql);
	if($cek < 1){
		?>
		<tr>
			<td colspan="7" style="text-align: center; padding: 10px;">Data Tidak Di temukan</td>
		</tr>
		<?php
	}else{

		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id_cek'] ?></td>
			<td><?php echo $data['unit'] ?></td>
			<td><?php echo $data['meter_awal'] ?></td>
			<td><?php echo $data['meter_akhir'] ?></td>
			<td><img src="../assets/img/<?php echo $data['gambar'] ?>" width="100" haight="50"></td>
			<td><?php echo $data['pemakaian'] ?></td>
			<td><?php echo $data['keterangan'] ?></td>
		</tr>
		<?php 
		}

	}
	?>
</table>
<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from dp_listrik"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=listrik&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
</div>