<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body>
	<br><be>
	<center><table border="1">
		<tr>
			<td>
				<table >
					<form action=" " method="post">
						<?php
						if (isset($_GET['nim'])) {
						$nim = $_GET['nim'];
						$query = mysqli_query($koneksi,"SELECT `nama`, `nim`, `jenis`, `prodi`, `fakultas`, `asal`, `moto` FROM `mahasiswa` WHERE `nim` = 	'$nim'");
						while ($d = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
						</tr>
						<tr>
							<td>Jenis kelamin</td>
							<td>:</td>
							<td>
								<input type="radio" name="jenis" value="laki-laki" <?php echo $d['jenis'] == "laki-laki" ? "checked" : ""; ?>>laki-laki<br>
								<input type="radio" name="jenis" value="perempuan" <?php echo $d['jenis'] == "perempuan" ? "checked" : ""; ?>>perempuan
							</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>:</td>
							<td>
								<select name="prodi">
									<option value="MI" <?php echo $d['prodi'] == "MI" ? "selected='selected'" : ""; ?>>Menejemen Infromatika</option>
									<option value="KA" <?php echo $d['prodi'] == "KA" ? "selected='selected'" : ""; ?>>Komputerisasi Akuntansi</option>
									<option value="MP" <?php echo $d['prodi'] == "MP" ? "selected='selected'" : ""; ?>>Kenejemen Pemasaran</option>
									<option value="TK" <?php echo $d['prodi'] == "TK" ? "selected='selected'" : ""; ?>>teknik Komputer</option>
									<option value="IF" <?php echo $d['prodi'] == "IF" ? "selected='selected'" : ""; ?>>teknik Informatika</option>
									<option value="TT" <?php echo $d['prodi'] == "TT" ? "selected='selected'" : ""; ?>>teknik Telekomunikasi</option>
									<option value="SM" <?php echo $d['prodi'] == "SM" ? "selected='selected'" : ""; ?>>Sistem Multimedia</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>:</td>
							<td><select name="fakultas">
									<option value="fit" <?php echo $d['prodi'] == "fit" ? "selected='selected'" : ""; ?>>Fakultas Ilmu Terapan</option>
									<option value="fik" <?php echo $d['prodi'] == "fik" ? "selected='selected'" : ""; ?>>Fakultas Ildustri Kreatif</option>
									<option value="fkb" <?php echo $d['prodi'] == "fkb" ? "selected='selected'" : ""; ?>>Fakultas Komunikasi dan Bisnis</option>
									<option value="fri" <?php echo $d['prodi'] == "fri" ? "selected='selected'" : ""; ?>>Fakultas Rekayasa Industri</option>
									<option value="fte" <?php echo $d['prodi'] == "fte" ? "selected='selected'" : ""; ?>>Fakultas Teknik elektro</option>
									<option value="fti" <?php echo $d['prodi'] == "fti" ? "selected='selected'" : ""; ?>>Fakultas teknik Informatika</option>
							</select></td>
						</tr>
						<tr>
							<td>Asal</td>
							<td>:</td>
							<td><input type="text" name="asal" value="<?php echo $d['asal']; ?>"></td>
						</tr>
						<tr>
							<td>Moto</td>
							<td>:</td>
							<td><input type="textarea" name="moto" value="<?php echo $d['moto']; ?>"></td>
						</tr>
						<tr>
							<td><input type="submit" name="edit" value="Update"></td>
						</tr>
						<?php }
						} ?>
					</form>
				</table>
			</td>
		</tr>
	</table>
	
</body>
</html>
<?php 
if (isset($_POST['edit'])) {
	$nama =$_POST['nama'];
	$nim_ganti =$_POST['nim'];
	$jenis =$_POST['jenis'];
	$prodi =$_POST['prodi'];
	$fakultas =$_POST['fakultas'];
	$asal =$_POST['asal'];
	$moto =$_POST['moto'];
	$query = mysqli_query($koneksi,"UPDATE `mahasiswa` SET `nama`='$nama',`nim`='$nim_ganti',`jenis`='$jenis',
		`prodi`='$prodi',`fakultas`='$fakultas',`asal`='$asal',`moto`='$moto' WHERE `nim` = '$nim'");
	if ($query) {
		header ("location: view.php?nim=$nim");
	} else {
		echo "Error Dalam update Data!";
		echo "<a href='isi.php'>Kembali</a>";
	}
}
?>
