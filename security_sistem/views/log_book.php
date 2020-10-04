<?php 
	include "../config/koneksi.php";
?>
<h3 style="margin-top: 70px;" class="ml-3">Data Air Conditioner</h3>
<br>
<a href="?page=tambah_ac" class="btn btn-md btn-success ml-3"><i class="fas fa-plus"></i> Compline</a>
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
	</tr>
	
</table>
	
</div>
</div>