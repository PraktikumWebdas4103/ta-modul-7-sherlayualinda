<?php
	$nim = $_GET['nim'];
	include"koneksi.php";
	$query = mysqli_query($koneksi,"delete from mahasiswa where nim='$nim'");
	if ($query) {
		header ("location: isi2.php");
	} else {
		echo "Error Dalam Menghapus Data!";
		echo "<a href='isi.php'>Kembali</a>";
	}
?>