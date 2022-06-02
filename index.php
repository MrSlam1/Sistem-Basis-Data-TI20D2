<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menampilkan Data MySQL Di PHP</title>
	 <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
</head>
<body>
	<h1><center>Menampilkan Data MySQL Di PHP</center></h1>
	<h2>Data Users</h2>
	<table>
		<tr>
			<th>Id User</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
		</tr>
		<?php 
			include 'koneksi.php';
			$data=mysqli_query($koneksi,"SELECT*FROM users");
			while ($show=mysqli_fetch_array($data)) 
			{
		?>
				<tr>
					<td><?php echo $show['id']; ?></td>
					<td><?php echo $show['username']; ?></td>
					<td><?php echo $show['password']; ?></td>
					<td><?php echo $show['nama_lengkap']; ?></td>
				</tr>
		<?php 		
			}
		 ?>
	</table>
		<br>
		<h2>Data Dokter</h2>
	<table>
		<tr>
			<th>Id Dokter</th>
			<th>Nama Dokter</th>
		</tr>
			<?php 
			include 'koneksi.php';
			$data=mysqli_query($koneksi,"SELECT*FROM dokter");
			while($show=mysqli_fetch_array($data))
				{
			?>
		 		<tr>
		 	 		<td><?php echo $show['id_dokter']; ?></td>
		 	 		<td><?php echo $show['nama_dokter']; ?></td>
		 		</tr>
		 	<?php 
		 		}
		 	?>
	</table>
		<br>
		<h2>Data Obat</h2>
	<table>
		<tr>
			<th>Id Obat</th>
			<th>Nama Obat</th>
		</tr>
			<?php 
			include 'koneksi.php';
			$data=mysqli_query($koneksi,"SELECT*FROM obat");
			while ($show=mysqli_fetch_array($data)) 
				{
			?>
			<tr>
				<td><?php echo $show['id_obat']; ?></td>
				<td><?php echo $show['nama_obat']; ?></td>
			</tr>
			<?php 
				}

			 ?>
	</table>
		<br>
		<h2>Data Pasien</h2>
	<table>
		<tr>
			<th>Id Pasien</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data=mysqli_query($koneksi,"SELECT*FROM pasien");
		while($show=mysqli_fetch_array($data))
			{
		 ?>
		 	<tr>
		 		<td><?php echo $show['id_pasien']; ?></td>
		 		<td><?php echo $show['nama_pasien']; ?></td>
		 		<td><?php echo $show['jenis_kelamin']; ?></td>
		 		<td><?php echo $show['umur']; ?></td>
		 	</tr>
		 <?php 
			}
		 ?>
	</table>
		<br>
		<h2>Data Berobat</h2>
	<table>
		<tr>
			<th>Id Berobat</th>
			<th>Id Pasien</th>
			<th>Id Dokter</th>
			<th>Tanggal Berobat</th>
			<th>Keluhan Pasien</th>
			<th>Hasil Diagnosa</th>
			<th>Penatalaksanaan</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data=mysqli_query($koneksi,"SELECT*FROM berobat");
		while ($show=mysqli_fetch_array($data)) 
			{
		?>
			<tr>
				<td><?php echo $show['id_berobat']; ?></td>
				<td><?php echo $show['id_pasien']; ?></td>
				<td><?php echo $show['id_dokter']; ?></td>
				<td><?php echo $show['tgl_berobat']; ?></td>
				<td><?php echo $show['keluhan_pasien']; ?></td>
				<td><?php echo $show['hasil_diagnosa']; ?></td>
				<td><?php echo $show['penatalaksanaan']; ?></td>
			</tr>
		<?php 
			}
		?>
	</table>
		<br>
		<h2>Data Resep</h2>
	<table>
		<tr>
			<th>Id Resep</th>
			<th>Id Berobat</th>
			<th>Id Obat</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data=mysqli_query($koneksi,"SELECT*FROM resep_obat");
		while ($show=mysqli_fetch_array($data)) 
			{
		?>
			<tr>
				<td><?php echo $show['id_resep'] ?></td>
				<td><?php echo $show['id_berobat'] ?></td>
				<td><?php echo $show['id_obat'] ?></td>
			</tr>
		<?php 
			}
		?>
	</table>
</body>
</html>