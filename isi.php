<?php 
session_start();
include_once 'koneksi.php';
if (isset($_SESSION["nim"])) {
	header(" ");
}
?>
<?php
	if (isset($_POST['submit'])) {
		$nama =$_POST['nama'];
		$nim =$_POST['nim'];
		$jenis =$_POST['jenis'];
		$prodi =$_POST['prodi'];
		$fakultas =$_POST['fakultas'];
		$asal =$_POST['asal'];
		$moto =$_POST['moto'];
		# code...
	}
?>
 
<form action=" " method="POST">
	<center><table border="1">
		<tr>
			<td><table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Jenis kelamin</td>
					<td>:</td>
					<td><input type="radio" name="jenis" value="laki-laki">laki-laki</td>
					<td><input type="radio" name="jenis" value="perempuan">perempuan</td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><select name="prodi">
							<option value="MI">Menejemen Infromatika</option>
							<option value="KA">Komputerisasi Akuntansi</option>
							<option value="MP">Kenejemen Pemasaran</option>
							<option value="TK">teknik Komputer</option>
							<option value="IF">teknik Informatika</option>
							<option value="TT">teknik Telekomunikasi</option>
							<option value="SM">Sistem Multimedia</option>
					</select></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><select name="fakultas">
							<option value="fit">Fakultas Ilmu Terapan</option>
							<option value="fik">Fakultas Ildustri Kreatif</option>
							<option value="fkb">Fakultas Komunikasi dan Bisnis</option>
							<option value="fri">Fakultas Rekayasa Industri</option>
							<option value="fte">Fakultas Teknik elektro</option>
							<option value="fti">Fakultas teknik Informatika</option>
					</select></td>
				</tr>
				<tr>
					<td>Asal</td>
					<td>:</td>
					<td><input type="text" name="asal"></td>
				</tr>
				<tr>
					<td>Moto</td>
					<td>:</td>
					<td><input type="textarea" name="moto"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Masuk"></td>
				</tr>
		
			</table></td>
		</tr>
	</table>
	

</form>
<?php 
if(isset($_POST['submit'])){
		$nama =$_POST['nama'];
		$nim =$_POST['nim'];
		$jenis =$_POST['jenis'];
		$prodi =$_POST['prodi'];
		$fakultas =$_POST['fakultas'];
		$asal =$_POST['asal'];
		$moto =$_POST['moto'];
		$masuk = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES ('$nama','$nim','$jenis','$prodi','$fakultas','$asal','$moto')");
		if ($masuk) {
		$_SESSION['nim'] = $nim;
		header("location: isi2.php");
	} 
	} 


?>
