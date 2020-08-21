<?php 
	include "config/koneksi.php";
?>
<div style="margin-left: 30px;">
	<nav class="w3-blok-item w3-padding">
		<a href="?page=3bulan" class="w3-bar-item w3-button">PM Elektrical</a>
		<a href="?page=pmfa" class="w3-bar-item w3-button">PM Fire Alarm</a>
		<a href="?page=pm_mecha" class="w3-bar-item w3-button">PM Mechanical</a>
	</nav>
	<h1 style="margin-left: 30px;">PREVENTIF MAINTENANCE FIRE ALARM</h1>
	<a href="?page=tambah_af" class="w3-bar-item w3-button w3-green"><i class="fas fa-plus"></i>Tambah Data</a>
	<a href="" class="w3bar-item w3-button w3-blue"><i class="fas fa-print"></i>Print</a>
	<br>
	<div class="card-body">
		<table class="w3-table w3-striped" border="1">
		<tr>
			<th>No.</th>
			<th>Periode Preventif</th>
			<th>Lokasi PM</th>
			<th>Nama Unit</th>
			<th>Lokasi Utilitas</th>
			<th>Rencana Perkerjaan</th>
			<th>Realisasi Perkerjaan</th>
			<th>Smoke And Heat Detector</th>
			<th>Opsi</th>
		</tr>
		<tr>
			<th></th>
		</tr>
		
	</table>
	</div>
