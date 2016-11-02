<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["attachment"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["attachment"]["tmp_name"]);
	if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
	} else {
			echo "File is not an image.";
			$uploadOk = 0;
	}
	}

	include("db_setting.php");
	if (!@mysql_select_db("2018exporegister")) die("fail to connect to server!");
	$sql_query = "INSERT INTO testadvance (`name`, `phone`, `telephone`, `identification`, `birthday`, `email`, `address`, `unit`, `position`, `food`, `event`, `attachment`) VALUES (";
	$sql_query .=  "'".$_POST["name"]."',";
	$sql_query .=  "'".$_POST["phone"]."',";
	$sql_query .=  "'".$_POST["telephone"]."',";
	$sql_query .=  "'".$_POST["identification"]."',";
	$sql_query .=  "'".$_POST["birthday"]."',";
	$sql_query .=  "'".$_POST["email"]."',";
	$sql_query .=  "'".$_POST["address"]."',";
	$sql_query .=  "'".$_POST["unit"]."',";
	$sql_query .=  "'".$_POST["position"]."',";
	$sql_query .=  "'".$_POST["food"]."',";
	$sql_query .=  "'".$_POST["event"]."',";
  $sql_query .=  "'".$_FILES['attachment']['name']."')";
	$result = mysql_query($sql_query);


    // $uploadLabFile ="";
  	// if ($_FILES['attachment']['name'] != '' && $_FILES['attachment']['error'] == 0)
  	// {
  	// 	$filename = str_replace(" ","",$_FILES['attachment']['name']);
  	// 	$uploadLabFile= $filename;
  	// 	$pathFilename = iconv("UTF-8", "big5//TRANSLIT//IGNORE", $uploadLabFile);
  	// 	move_uploaded_file($_FILES["attachment"]["tmp_name"], "./uploads/" .$pathFilename);
  	// }

		// $result = mysql_query("INSERT INTO applybasic (name) VALUES ('$_POST[name]')");
		// if($result)
		// {
		// echo "Success";
		//
		// }
		// else
		// {
		// echo "Error";
		//
		// }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>志工特殊教育訓練 | 2018花博志工導覽報名系統</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<script src="js/style.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1 class="text-center">您已完成報名！</h1>
<div class="text-center"><a href="http://sls.asia.edu.tw/2018expo"><button type="button" class="btn btn-default btn-lg">回到首頁</button></a></div>
<h1>
</h1>
</body>
</html>
