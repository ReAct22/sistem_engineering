<?php 
	include "../config/koneksi.php";

	$idfa = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_fa where id_pmfa = '$idfa'");
?>
<script type="text/javascript">
	alert("Hapus Data berhasi");
	window.location.href="?page=pmfa";
</script>