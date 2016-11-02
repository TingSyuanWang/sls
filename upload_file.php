<?php
	include("db_setting.php");
		if (!@mysql_select_db("2018exporegister")) die("fail to connect to server!");
		$sql_query = "INSERT INTO testbasic (`name`, `phone`, `telephone`, `identification`, `birthday`, `email`, `address`, `unit`, `position`, `food`, `event`) VALUES (";
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
		$sql_query .=  "'".$_POST["event"]."')";
		$result = mysql_query($sql_query);
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
	<title>志工基礎訓練 | 2018花博志工導覽報名系統</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<script src="js/style.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img src="images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統">
<h1 class="text-center">您已完成報名！</h1>
<br />
<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="text-center">
			<a href="basic.php">
			<button type="button" class="btn btn-primary btn-lg btn-block">
				<span>
					重新報名基礎訓練
				</span>
			</button>
			</a>
			<a href="advance.php">
			<button type="button" class="btn btn-warning btn-lg btn-block successButton">
				<span>
					報名進階訓練
				</span>
			</button>
			</a>
			<a href="http://sls.asia.edu.tw/2018expo">
			<button type="button" class="btn btn-success btn-lg btn-block successButton">
				<span>
					回到首頁
				</span>
			</button>
			</a>
		</div>
		</div>
		<div class="col-md-3">
		</div>
</div>
</div>
<!-- <div class="text-center">
	<div class="btn-group" role="group">
	<div class="btn-group">
		<a href="basic.php"><button type="button" class="btn btn-primary btn-lg">重新報名基礎訓練</button></a>
	</div>
	<div class="btn-group">
		<a href="advance.php"><button type="button" class="btn btn-warning btn-lg">報名進階訓練</button></a>
	</div>
	<div class="btn-group">
		<a href="http://sls.asia.edu.tw/2018expo"><button type="button" class="btn btn-success btn-lg">回到首頁</button></a>
	</div>
</div>
</div> -->
</body>
</html>
