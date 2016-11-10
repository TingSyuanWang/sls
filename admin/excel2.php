<?php
// excel.php

require_once '../db_setting.php';

//Include class
require_once('Classes/PHPExcel.php');
require_once('Classes/PHPExcel/Reader/Excel2007.php');
require_once('Classes/PHPExcel/Writer/Excel2007.php');

$seldb = @mysql_select_db("2018exporegister");
if (!$seldb) die("資料庫無法連結");

$SQL = "SELECT * FROM  `testbasic` WHERE `event`='第二場次 105.11.05(六)-06(日) 亞洲大學' ORDER BY `id`";
$result = mysql_query( $SQL ) or die("Couldn't execute query.".mysql_error());

if (file_exists('admin_template.xlsx')) {
     $objReader = new PHPExcel_Reader_Excel2007();
     $objPHPExcel = $objReader->load('admin_template.xlsx');
 }
 else {
   $objPHPExcel = new PHPExcel();
 }

// Set document properties
$objPHPExcel->getProperties()->setCreator("VincentWang");
$objPHPExcel->getProperties()->setLastModifiedBy("VincentWang");
$objPHPExcel->getProperties()->setTitle("2018exporegister");
$objPHPExcel->getProperties()->setSubject("2018exporegister");
$objPHPExcel->getProperties()->setDescription("2018exporegister");
$objPHPExcel->getProperties()->setKeywords("2018exporegister");
$objPHPExcel->getProperties()->setCategory("2018exporegister");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', '編號');
$objPHPExcel->getActiveSheet()->setCellValue('B1', '姓名');
$objPHPExcel->getActiveSheet()->setCellValue('C1', '電話');
$objPHPExcel->getActiveSheet()->setCellValue('D1', '手機');
$objPHPExcel->getActiveSheet()->setCellValue('E1', '身分證字號');
$objPHPExcel->getActiveSheet()->setCellValue('F1', '生日');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'E-mail');
$objPHPExcel->getActiveSheet()->setCellValue('H1', '地址');
$objPHPExcel->getActiveSheet()->setCellValue('I1', '學校/機關/團體/社團');
$objPHPExcel->getActiveSheet()->setCellValue('J1', '系所/職稱');
$objPHPExcel->getActiveSheet()->setCellValue('K1', '飲食習慣');
$objPHPExcel->getActiveSheet()->setCellValue('L1', '報名場次');

$i=2;
while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
  $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $row['id']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $row['name']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $row['phone']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $row['telephone']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $row['identification']);
  $objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $row['birthday']);
  $objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $row['email']);
  $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $row['address']);
  $objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $row['unit']);
  $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $row['position']);
  $objPHPExcel->getActiveSheet()->setCellValue('K'.$i, $row['food']);
  $objPHPExcel->getActiveSheet()->setCellValue('L'.$i, $row['event']);
  $i++;
}

  $filename="2018expo-".date("YmdHis").".xlsx";
  header("Pragma: public");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");;
  header("Content-Disposition: attachment;filename=$filename");
  header("Content-Transfer-Encoding: binary ");
  $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
  $objWriter->setOffice2003Compatibility(true);
  $objWriter->save('php://output');
  exit;
?>
