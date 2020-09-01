<?php 
	include "../config/koneksi.php";
	$iduser = @$_GET['id'];
	mysqli_query($koneksi,"delete from tb_user where id_user = '$iduser'");
?>
<script type="text/javascript">
	alert("data berhasil di hapus");
	window.location.href="?page=data_user";
</script>