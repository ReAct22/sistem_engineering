<?php 
	$koneksi = mysqli_connect("localhost","root","","maintenance_engineering");

	if(mysqli_connect_errno()){
		echo "Koneksi Database gagal : ". mysqli_connect_error();
	}
?>