<?php  

	//memanggil koneksi
	include '../koneksi.php';
	//memanggil data dari tabel mahasiswa
	$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
	//menampung data dalam sebuah array
	while($row = mysqli_fetch_array($mahasiswa)){
		$data[] = $row;
	}
	echo json_encode($data);

?>