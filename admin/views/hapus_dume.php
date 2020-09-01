<?php 
include "config/koneksi.php";

$idme = @$_GET['id'];

mysqli_query($koneksi,"delete from du_me where id_me = '$idme'");

?>
<script type="text/javascript">
	alert("Delete data Success");
	window.location.href="?page=dume";
</script>