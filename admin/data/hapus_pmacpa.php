<?php 
include "../config/koneksi.php";
	$idac = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_acap where id_pmac = '$idac'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=bulanan";
</script>