<?php 
	include "../config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=3bulan" class="w3-bar-item w3-button">PM Elektrical</a>
		<a href="?page=pmfa" class="w3-bar-item w3-button">PM Fire Alarm</a>
		<a href="?page=pm_mecha" class="w3-bar-item w3-button">PM Mechanical</a>
		
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE ELECTRICAL</h1>
	<a href="?page=tambah_pmelek" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="print_data/print_pmel.php" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
			<th>Nama Utilitas</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkarjaan</th>
			<th>Foto Perkerjaan</th>
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
			$sql = mysqli_query($koneksi,"select *from pm_elektrical where id_pmelektrik like '%$cari%' or nama_utilitas like '%$cari%' or lokasi_utilitas like '%$cari%'");
		}else{
			$sql = mysqli_query($koneksi,"select *from pm_elektrical");
		}
	}else{
		$sql = mysqli_query($koneksi,"select *from pm_elektrical LIMIT $posisi, $batas");
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
			<td><?php echo $data['id_pmelektrik'] ?></td>
			<td><?php echo $data['periode'] ?></td>
			<td><?php echo $data['nama_utilitas'] ?></td>
			<td><?php echo $data['lokasi_utilitas'] ?></td>
			<td><?php echo date('d-m-y',strtotime($data['rencana'])) ?></td>
			<td><?php echo date('d-m-y',strtotime($data['realisasi'])) ?></td>
			<td><img src=../assets/img/<?php echo $data['gambar'] ?>" width="100" height="50"></td>
			<td>
				<a href="?page=edit_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</a>
			</td>
		</tr>
		<?php 
		}
	}
		?>
	</table>
	<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from pm_elektrical"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=3bulan&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
