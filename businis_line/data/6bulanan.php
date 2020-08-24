<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=3bulan" class="w3-bar-item w3-button">PM Elektrical</a>
		<a href="?page=pmfa" class="w3-bar-item w3-button">PM Fire Alarm</a>
		<a href="?page=pm_mecha" class="w3-bar-item w3-button">PM Mechanical</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE ELECTRICAL</h1>
	<a href="?page=tambah_pmelek" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>

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
			<th>Nama Vendor</th>
			<th>Alamat Vendor</th>
			<th>Nama Teknisi</th>
			<th>Jenis Perkerjaan</th>
			<th>Foto Perkerjaan</th>
			<th>Rekomendasi</th>
			<th>Opsi</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<a href="?page=edit_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i>Edit</a>
				<a href="?page=delete_pmelektrik&id=<?php echo $data['id_pmelektrik'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</a>
			</td>
		</tr>
	</table>
	
	</div>
</div>