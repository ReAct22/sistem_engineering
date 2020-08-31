<?php 
	include "config/koneksi.php";

	$idlift = @$_GET['id'];
	mysqli_query($koneksi,"delete from pm_lift where id_pmlift = '$idlift'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=pmlift";
</script>