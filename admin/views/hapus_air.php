<?php 
	include "config/koneksi.php";
	$idcek = @$_GET['id'];
	mysqli_query($koneksi,"delete from dp_air where id_cek = '$idcek'");
?>
<script type="text/javascript">
	alert("Data berhasil di hapus");
	window.location.href="?page=air";
</script>