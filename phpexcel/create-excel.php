<?php

include '../koneksi.php';
//  Include PHPExcel_IOFactory
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';


$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NAMA');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'JURUSAN');

$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
$no=2;
while($data = mysqli_fetch_array($mahasiswa)){
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $data['nim']);
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $data['nama']);
	$objPHPExcel->getActiveSheet()->setCellValue('C'.$no, $data['jurusan']);
	$no++;
}
    

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
$objWriter->save("datamahasiswa.xlsx");
?>