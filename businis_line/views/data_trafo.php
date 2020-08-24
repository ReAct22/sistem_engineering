<?php 
 include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<h2>Data Trafo</h2>
	<br>
	<a href="?page=tambah_trafo" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i>Tambah Data Trafo</a>
	<a href="?page=print_trafo" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>

	<form action="" method="post" class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="float: right; margin-right: 50px;">
            <div class="input-group">
              <input type="text" name="cari" class="form-control bg-light border-1 mb-3 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" name="cari_data" class="btn btn-primary mb-3" value="cari">
              </div>
            </div>
          </form>

	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
			<tr>
				<th>No Utilitas</th>
				<th>Nama Utilitas</th>
				<th>Lokasi Utilitas</th>
				<th>Jumlah</th>
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
			$cari_data = @$_POST['cari_data'];
			if($cari_data){
				if($cari != ""){
					$sql = mysqli_query($koneksi,"select *from du_trafo where id_trafo like '%$cari%' or nama_utilitas like '%$cari%' or lokasi_utilitas like '%$cari%'");
				}else{
					$sql = mysqli_query($koneksi,"select *from du_trafo");
				}
			}else{ 
				$sql = mysqli_query($koneksi,"select *from du_trafo LIMIT $posisi, $batas");
			}

			$cek = mysqli_num_rows($sql);
			if($cek < 1){
				?>
					<tr>
						<td colspan="6" style="padding: 10px; text-align: center">Data Tidak Di temukan</td>
					</tr>
				<?php
			}else{
				while($data = mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $data['id_trafo'] ?></td>
					<td><?php echo $data['nama_utilitas'] ?></td>
					<td><?php echo $data['lokasi_utilitas'] ?></td>
					<td><?php echo $data['jumlah'] ?></td>
					<td><?php echo $data['keterangan'] ?></td>
					<td style="text-align: center;">
						<a href="?page=edit_trafo&id=<?php echo $data['id_trafo'] ?>" class="w3-bar-item w3-button w3-blue"><i class="fas fa-edit"></i>Edit</a>

						<a href="?page=delete_trafo&id=<?php echo $data['id_trafo'] ?>" class="w3-bar-item w3-button w3-red"><i class="fas fa-trash"></i>Hapus</a> 
					</td>
				</tr>
				<?php 
				}
			}
			?>
		</table>
		<div style="margin-top: 10px;float: left;">
        <?php 
        $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from du_trafo"));
        
        ?>
      </div>
      <div style="margin-top: 10px; float: right;">
        <?php 
          $jml_hal = ceil($jml / $batas);
          for($i=1; $i<=$jml_hal; $i++){
        ?>
        <a href="?page=trafo&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
        <?php
          }
        ?>
      </div>
	</div>
</div>