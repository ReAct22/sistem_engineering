<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Job Desk</h3>
<br>
<a href="?page=tambah_jobdeskcs" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
<a href="?page=print_ac" class="btn btn-md btn-primary ml-3"><i class="fas fa-print"></i> Print</a>

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
		<th>No Jobdeskripsi</th>
		<th>Hari dan Tanggal</th>
		<th>Waktu Shift</th>
		<th>Area</th>
		<th>Petugas</th>
		<th>Uraian Tugas</th>
		<th>Supervisor</th>
		<th>Uraian Tugas Supervisor</th>
		<th>Waktu Shift Supervisor</th>
		<th>Keterangan</th>
	</tr>
		<?php 
			$sql = mysqli_query($koneksi,"select *from jb_cs");
			while($data = mysqli_fetch_array($sql)){
		 ?>
	<tr>
		<td><?php echo $data['no_job'] ?></td>
		<td><?php echo $data['hari'] ?>/<?php echo $data['tgl'] ?></td>
		<td><?php echo $data['waktu_shift'] ?></td>
		<td><?php echo $data['area'] ?></td>
		<td><?php echo $data['petugas'] ?></td>
		<td><?php echo $data['uraian_tugas'] ?></td>
		<td><?php echo $data['supervisor'] ?></td>
		<td><?php echo $data['tugas_supervisor'] ?></td>
		<td><?php echo $data['shift_supervisor'] ?></td>
		<td><?php echo $data['keterangan'] ?></td>
	</tr>
	<?php } ?>
</table>
	
</div>
</div>