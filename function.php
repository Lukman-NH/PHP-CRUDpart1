<?php 
//koneksi ke database
$db = mysqli_connect("localhost","root","","3ka16_lukman_film");


function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows =[];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $db;
	//ambil data dari tiap element
	$kdmov = htmlspecialchars($data["kdmov"]);
	$judul = htmlspecialchars($data["judul"]);
	$series = htmlspecialchars($data["series"]);
	$kdgenre = htmlspecialchars($data["kdgenre"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$negara = htmlspecialchars($data["negara"]);
	$director = htmlspecialchars($data["director"]);
	$rating = htmlspecialchars($data["rating"]);

	//query insert data
	$query ="
			 INSERT INTO film VALUES
			 ('$kdmov', '$judul', '$series', '$kdgenre', '$tahun', '$negara', '$director' ,'$rating')
			";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

	function hapus($kdmov){
		global $db;
		mysqli_query($db, "DELETE FROM film WHERE kdmov = $kdmov");
		return mysqli_affected_rows($db);

	}

 ?>