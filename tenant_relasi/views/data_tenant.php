<?php 
	include "../config/koneksi.php";
?>
<h3 style="" class="ml-3">Data Tenant</h3>
<br>
<a href="?page=tambah_tenant" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
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
		<th>Unit TN</th>
		<th>Nama TN</th>
		<th>Kantor TN</th>
		<th>Alamat Kantor TN</th>
		<th>Email Kantor TN</th>
		<th>Telpon Kantor TN</th>
		<th>Negara TN</th>
		<th>Kontak TN</th>
		<th>Email TN</th>
		<th>Masuk TN</th>
		<th>keluar TN</th>
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
			$sql = mysqli_query($koneksi,"select *from d_tenant where unit_tn like '%$cari%' or nama_tn like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from d_tenant");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from d_tenant LIMIT $posisi, $batas");
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
		<td><?php echo $data['unit_tn'] ?></td>
		<td><?php echo $data['nama_tn'] ?></td>
		<td><?php echo $data['kantor_tn'] ?></td>
		<td><?php echo $data['alamat_kantor_tn'] ?></td>
		<td><?php echo $data['email_kantor_tn'] ?></td>
		<td><?php echo $data['telpon_kantor_tn'] ?></td>
		<td><?php echo $data['negara_tn'] ?></td>
		<td><?php echo $data['kontak_tn'] ?></td>
		<td><?php echo $data['email_tn'] ?></td>
		<td><?php echo $data['masuk_tn'] ?></td>
		<td><?php echo $data['keluar_tn'] ?></td>
	</tr>
	<?php
	 }
	}
	 ?>
</table>

<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from d_tenant"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=data_tenant&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	
</div>
</div>