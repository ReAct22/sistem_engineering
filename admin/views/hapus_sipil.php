<?php 
	include "../config/koneksi.php";
	$idcom = @$_GET['id'];
	mysqli_query($koneksi,"delete from co_sipil where id_complaine = '$idcom'");
?>
<script type="text/javascript">
	alert("Hapus Data berhasil");
	window.location.href="?page=sipil";
</script>