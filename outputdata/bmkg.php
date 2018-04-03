<?php  

	$url =  "http://feeds.bbc.co.uk/indonesian/sports/index.xml";
	//menarik data yang bersumber dari link
	$data = file_get_contents($url);
	$objek = simplexml_load_string($data);
	echo "<pre>";
	print_r($objek);
	echo "</pre>";

?>