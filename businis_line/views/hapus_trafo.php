<?php 
include "config/koneksi.php";

$idtrafo= @$_GET['id'];

mysqli_query($koneksi,"delete from du_trafo where id_trafo = '$idtrafo'");

?>
<script type="text/javascript">
	window.location.href="?page=trafo";
</script>