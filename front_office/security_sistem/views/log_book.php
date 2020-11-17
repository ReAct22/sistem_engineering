<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Log Book</h3>
<br>
<a href="?page=tambah_log_book" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i>Tambah</a>
<a href="?page=print_log_book" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>

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
		<th>No</th>
		<th>Nomer Log Book</th>
		<th>Nama</th>
		<th>Date</th>
		<th>Document</th>
		<th>Package</th>
		<th>Unit Key</th>
		<th>Inventory Key</th>
		<th>Acces Card</th>
		<th>Car Keys</th>
		<th>Payment</th>
		<th>Message</th>
	</tr>
		<?php 
			$no = 1;
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
			$sql = mysqli_query($koneksi,"select *from d_log_book where id_log_book like '%$cari%' or nama like '%$cari%' or tgl like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from d_log_book");
		}
	}else{
		 
		$sql = mysqli_query($koneksi,"select *from d_log_book order by id_log_book desc LIMIT $posisi, $batas");
		
	}

	$no = $posisi +1;
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
		<td><?php echo $no++ ?></td>
		<td><?php echo $data['id_log_book'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tgl'])) ?></td>
		<td><?php echo $data['document'] ?></td>
		<td><?php echo $data['package'] ?></td>
		<td><?php echo $data['unit_key'] ?></td>
		<td><?php echo $data['inventori_key'] ?></td>
		<td><?php echo $data['acces_card'] ?></td>
		<td><?php echo $data['l'] ?></td>
		<td><?php echo $data['payment'] ?></td>
		<td><?php echo $data['message'] ?></td>
	</tr>
	<?php 
		}
	}
	?>
	
</table>

<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from d_log_book"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=log_book&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	
</div>
</div>