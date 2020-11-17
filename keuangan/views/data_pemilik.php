<?php 
	include "../config/koneksi.php";
?>
<h3 style="" class="ml-3">Data Pemilik</h3>
<br>
<a href="?page=tambah_pemilik" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
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
		<th>No Unit</th>
		<th>Pemilik</th>
		<th>Kantor</th>
		<th>Alamat Kantor</th>
		<th>Email Kantor</th>
		<th>Telpon Kantor</th>
		<th>Negara</th>
		<th>Kontak Pemilik</th>
		<th>Email Pemilik</th>
		<th>Masuk</th>
		<th>keluar</th>
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
			$sql = mysqli_query($koneksi,"select *from tb_pemilik where no_unit like '%$cari%' or pemilik like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from tb_pemilik");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from tb_pemilik LIMIT $posisi, $batas");
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
		<td><?php echo $data['no_unit'] ?></td>
		<td><?php echo $data['pemilik'] ?></td>
		<td><?php echo $data['kantor'] ?></td>
		<td><?php echo $data['alamat_kantor'] ?></td>
		<td><?php echo $data['email_kantor'] ?></td>
		<td><?php echo $data['telpon_kantor'] ?></td>
		<td><?php echo $data['negara'] ?></td>
		<td><?php echo $data['kontak_pemilik'] ?></td>
		<td><?php echo $data['email_pemilik'] ?></td>
		<td><?php echo $data['masuk'] ?></td>
		<td><?php echo $data['keluar'] ?></td>
	</tr>
	<?php 

} 
}
?>
</table>
	
	<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from tb_pemilik"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=data_pemilik&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>

</div>
</div>