<?php require "login/loginheader.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>2018花博志工導覽報名管理系統</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<script src="../js/bootstrap.js"></script>
	<!-- custom css/js -->
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script src="../js/style.js"></script>
	<!-- jquery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<!-- responsive setting -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="container">
		<img src="../images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統" height="100">
		<h1 class="text-center">志工導覽報名管理系統</h1>
		<h3 class="text-center"><a href="login/logout.php">登出</a></h3>
		<br />
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
				  <h2>志工基礎訓練或志工特殊訓練</h2>
				  <p><a class="btn btn-primary btn-lg" href="basic.php" role="button">管理系統</a></p>
				</div>
			</div>
			<!-- col -->
			<div class="col-md-6">
				<div class="jumbotron">
				  <h2>特殊教育訓練</h2>
				  <p><a class="btn btn-primary btn-lg" href="advance.php" role="button">管理系統</a></p>
				</div>
			</div>
			<!-- col -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</body>

</html>
