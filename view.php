<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body><br><br><br>	
	<center>
		<table  border="1">
			<tr>
				<td>
					<table>
							<?php
							$nim = $_GET['nim'];
							$query = "SELECT * FROM `mahasiswa` WHERE nim = '$nim'";
							$result = mysqli_query($koneksi,$query);
							while ($d = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td>
									<label>Nama</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['nama']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>NIM</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['nim']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Jenis Kelamin</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['jenis']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Fakultas</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['fakultas']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Program Studi</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['prodi']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Asal</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['asal']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Moto Hidup</label>
								</td>
								<td>:</td>
								<td>
									<?php echo $d['moto']; ?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>
									<a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
								</td>
							</tr>
							<?php } ?>
					</table>
				</td>
			</tr>
		</table>
		
</body>
</html>