<?php 
	include "../config/koneksi.php";

	$idpf = @$_GET['id'];

	mysqli_query($koneksi,"delete from pm_preasure_fan where id_pf = '$idpf'");
?>
<script type="text/javascript">
	alert("Data berhasil di Hapus");
	window.location.href="?page=preasure_fan";
</script>