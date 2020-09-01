<?php 
include "../config/koneksi.php";
	$idke = @$_GET['id'];
	mysqli_query($koneksi,"delete from tb_ke where id_ke = '$idke'");
?>
<script type="text/javascript">
	alert("Delete Data Success");
	window.location.href="?page=data_ke";
</script>