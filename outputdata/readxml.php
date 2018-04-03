<?php  

	$url =  "http://localhost/trikphp/outputdata/makexml.php";

	//menarik data yang bersumber dari link
	$data = file_get_contents($url);
	$objek = simplexml_load_string($data);

	foreach ($objek as $row) {
		echo $row->nama;
		echo "<br>";
		echo $row->nim;
		echo "<br>";
		echo $row->jurusan;
		echo "<hr>";
		echo "<br><br>";

	}


	echo "</table>";

?>