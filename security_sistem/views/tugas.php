<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Rencana Tugas</h3>
<br>
<a href="?page=tambah_tugas" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i>Tambah</a>
<a href="?page=print_tugas" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>

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
		<th>No Form</th>
		<th>Hari/Tanggal</th>
		<th>Regu</th>
		<th>Shift</th>
		<th>Waktu</th>
		<th>Nama Pos</th>
		<th>Lokasi</th>
		<th>Petugas</th>
		<th>Jam Masuk</th>
		<th>Jam Keluar</th>
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
			$sql = mysqli_query($koneksi,"select *from tb_tugas where no_form like '%$cari%' or hari like '%$cari%' or tanggal like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from tb_tugas");
		}
	}else{
		 
		$sql = mysqli_query($koneksi,"select *from tb_tugas order by no_form desc LIMIT $posisi, $batas");
		
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
		<td><?php echo $data['no_form'] ?></td>
		<td><?php echo $data['hari'] ?>/ <?php echo date('d-m-Y',strtotime($data['tanggal'])) ?></td>
		<td><?php echo $data['regu'] ?></td>
		<td><?php echo $data['shift'] ?></td>
		<td><?php echo $data['waktu'] ?></td>
		<td><?php echo $data['nama_pos'] ?></td>
		<td><?php echo $data['lokasi'] ?></td>
		<td><?php echo $data['petugas'] ?></td>
		<td><?php echo $data['masuk'] ?></td>
		<td><?php echo $data['keluar'] ?></td>
		<td><?php echo $data['keterangan'] ?></td>
	</tr>
	<?php 
		}
	}
	 ?>
	
</table>

<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from tb_tugas"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=tugas&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	
</div>
</div>