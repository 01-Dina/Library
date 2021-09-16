<?php 

	$id = $_GET ['id'];

	$koneksi->query("delete from buku where id ='$id'");

?>


<script type="text/javascript">
	document.location.href="?page=buku";
</script>