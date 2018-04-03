<?php

include '../koneksi.php';

$xml = new XMLWriter();
$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

// create node
$xml->startElement("Students");
$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa");
while($row = mysqli_fetch_array($mahasiswa)){

	// write data 
	$xml->startElement("Student");
	$xml->writeElement("nim", $row['nim']);
	$xml->writeElement("nama", $row['nama']);
	$xml->writeElement("jurusan", $row['jurusan']);
	$xml->endElement();
}

	$xml->endElement();

// set Header
header('Content-type: text/xml');
$xml->flush();

?>