<?php 
include "config/koneksi.php";

$idpompa = @$_GET['idpompa'];

mysqli_query($koneksi,"delete from du_pompa where id_pompa = '$idpompa'");

?>
<script type="text/javascript">
	window.location.href="?page=pompa";
</script>