<?php 
	include "../config/koneksi.php";

	$idpl = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_infrared where id_infrared = '$idpl'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=pm_infrared";
</script>