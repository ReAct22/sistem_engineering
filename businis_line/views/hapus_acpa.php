<?php 
include "../config/koneksi.php";

$idacpa = @$_GET['idacpa'];

mysqli_query($koneksi,"delete from du_ac_public_area where id_acpa = '$idacpa'");

?>
<script type="text/javascript">
	window.location.href="?page=ac_pa";
</script>