<?php 
	include "../config/koneksi.php";

	$idstaff = @$_GET['id'];
	mysqli_query($koneksi,"delete from tb_staff where id_staff = '$idstaff'");
?>
<script type="text/javascript">
	alert("Hapus Data berhasil");
	window.location.href="?page=data_staff";
</script>