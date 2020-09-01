<?php 
include "../config/koneksi.php";

$idlift = @$_GET['idlift'];

mysqli_query($koneksi,"delete from du_lift where id_lift = '$idlift'");

?>
<script type="text/javascript">
	window.location.href="?page=lift";
</script>