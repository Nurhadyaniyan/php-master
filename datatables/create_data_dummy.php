<?php  

	ini_set('max_execution_time', 1000);
	include '../koneksi.php';
	//insert 10000 data
	for ($i=1; $i<=1000; $i++) { 
		mysqli_query($koneksi,"insert into mahasiswa set nim='SI00$i',nama='MAHASISWA KE-$i',jurusan='SISTEM INFORMASI'"); //or die ("data gagal di masukan");
	}

?>