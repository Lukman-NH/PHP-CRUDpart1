<?php 
//koneksi ke database
$db = mysqli_connect("localhost","root","","3ka16_kel2");

//ambil data dari tabel
$result = mysqli_query($db, "SELECT * FROM penyewa");

if (!$result) {
	echo mysqli_error($db);
}

//ambil data (fetch) penyewadari objek result
// mysqli_fetch_row() / mengembalikan array numeric c:(0)(1)
// mysqli_fetch_assoc() /mengembalikan array assosiatif c: id
// mysqli_fetch_array() / mengembalikan semua array (fleksibel) (-)datanya dobel
// mysqli_fetch_object() / mengembalikan object

//while( $penyewa = mysqli_fetch_assoc($result) ) {
//	var_dump($penyewa);
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Penyewa Hotel</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Kode Penyewa</th>
			<th>Nama Penyewa</th>
			<th>Alamat</th>
			<th>Nomor Telpon</th>
		</tr>

		<?php $i=1; ?>
		<?php while( $row = mysqli_fetch_assoc($result)) :?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><?php echo $row["KdPenyewa"]; ?></td>
			<td><?php echo $row["NamaPenyewa"]; ?></td>
			<td><?php echo $row["Alamat"]; ?></td>
			<td><?php echo $row["NoTelp"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
			
	</table>
</body>
</html>