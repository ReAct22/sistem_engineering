<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Security</h3>
<br>
<a href="?page=tambah_security" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i>Tambah</a>
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
		<th>No</th>
		<th>NIK Security</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>TMT</th>
		<th>TB</th>
		<th>BB</th>
		<th>NIK KTP</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>Pendidikan Terakhir</th>
		<th>NO Handphone</th>
		<th>Jabatan</th>
		<th>Status</th>
	</tr>
		<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select *from d_security order by nik_security desc");
			while($data = mysqli_fetch_array($sql)){
		?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $data['nik_security'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['tempat_lhr'] ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tgl_lhr'])) ?></td>
		<td><?php echo date('d-m-Y', strtotime($data['tmt'])) ?></td>
		<td><?php echo $data['tb'] ?></td>
		<td><?php echo $data['bb'] ?></td>
		<td><?php echo $data['nik_ktp'] ?></td>
		<td><?php echo $data['alamat'] ?></td>
		<td><?php echo $data['agama'] ?></td>
		<td><?php echo $data['pendidikan'] ?></td>
		<td><?php echo $data['no_tlp'] ?></td>
		<td><?php echo $data['jabatan'] ?></td>
		<td><?php echo $data['status'] ?></td>
	</tr>
	<?php 
		}
	?>
	
</table>


	
</div>
</div>