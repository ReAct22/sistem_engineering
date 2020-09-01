<?php 
	include "config/koneksi.php";
	$idcom = @$_GET['id'];
	mysqli_query($koneksi,"delete from co_ac where id_complaine = '$idcom'");
?>
<script type="text/javascript">
	alert("Data berhasil di hapus");
	window.location.href="?page=ac";
</script>