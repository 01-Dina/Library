<?php 

$id=$_GET['id'];
$judul=$_GET['judul'];

$sql = $koneksi->query("update transaksi set status='kembali' where id='$id'");

$sql = $koneksi->query("upload buku set jumlah_buku = (jumlah_buku+1) where judul='$judul'");

?>

	<script type="text/javascript">
		alert("Proses Kembali Berhasil");
		document.location.href="?page=transaksi";
	</script>

	<?php

	?>
