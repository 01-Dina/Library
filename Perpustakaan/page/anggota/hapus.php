<?php 

	$nis = $_GET ['id'];

	$koneksi->query("delete from anggota where nis ='$nis'");

?>


<script type="text/javascript">
	document.location.href="?page=anggota";
</script>