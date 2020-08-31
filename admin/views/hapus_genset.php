<?php 
include "config/koneksi.php";

$idgenset = @$_GET['idgenset'];

mysqli_query($koneksi,"delete from du_generator_set where id_generator_set = '$idgenset'");

?>
<script type="text/javascript">
	window.location.href="?page=generator";
</script>