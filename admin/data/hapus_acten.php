<?php 
	include "../config/koneksi.php";

	$idten = @$_GET['id'];
	mysqli_query($koneksi,"delete from pm_acten where id_acten = '$idten'");
?>
<script type="text/javascript">
	alert("Data berhasil Di hapus");
	window.location.href="?page=acten";
</script>