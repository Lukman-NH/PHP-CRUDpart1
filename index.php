<?php 
require 'function.php';
$film = query("SELECT * FROM film");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Film</h1>

<a href="tambah.php">Update Film</a>
<br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Kode Film</th>
			<th>Judul</th>
			<th>Series</th>
			<th>Kode Genre</th>
			<th>Tahun</th>
			<th>Negara</th>
			<th>Director</th>
			<th>Rating</th>
		</tr>

		<?php $i=1; ?>
		<?php foreach( $film as $row) :?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="hapus.php?kdmov=<?= $row["kdmov"]; ?>" onclick="return confirm('Anda yakin untuk menghapus?');">Hapus</a>
			</td>
			<td><?php echo $row["kdmov"]; ?></td>
			<td><?php echo $row["judul"]; ?></td>
			<td><?php echo $row["series"]; ?></td>
			<td><?php echo $row["kdgenre"]; ?></td>
			<td><?php echo $row["tahun"]; ?></td>
			<td><?php echo $row["negara"]; ?></td>
			<td><?php echo $row["director"]; ?></td>
			<td><?php echo $row["rating"]; ?></td>

		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
			
	</table>
</body>
</html>