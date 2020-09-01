<?php 
include "../config/koneksi.php";

$idutili = @$_GET['idutili'];

mysqli_query($koneksi,"delete from du_elektrical where id_utilitas = '$idutili'");

?>
<script type="text/javascript">
	window.location.href="?page=elektrical";
</script>