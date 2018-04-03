<?php

include '../koneksi.php';
//  Include PHPExcel_IOFactory
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';
// nama file
$inputFileName = 'mahasiswa.xlsx';
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}
//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
//menampilkan berapa banyak jumlah data dalam excel
$highestRow = $sheet->getHighestRow(); 
// echo $highestRow;
// die;
$highestColumn = $sheet->getHighestColumn();

echo "<table border=1>";
//  Loop through each row of the worksheet in turn
for ($row = 2; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
    $NIM     = str_replace("'", "",$rowData[0][1]);
    $nama    = str_replace("'", "",$rowData[0][2]);
    $jurusan = str_replace("'", "",$rowData[0][3]);
    echo "<tr><td>$NIM</td><td>$nama</td><td>$jurusan</td></tr>";

    //perintah insert data ke tabel mahasiswa
    mysqli_query($koneksi,"insert into mahasiswa SET nim='$NIM',nama='$nama',jurusan='$jurusan'");

  }
    echo "</table>";
?>