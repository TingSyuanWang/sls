<?php
	include("db_setting.php");
		if (!@mysql_select_db("2018exporegister")) die("fail to connect to server!");
		// 寄信
		$sendEmail = $_POST["email"];
		$to = "$sendEmail"; //收件者
		$subject = "【溫馨提醒】2018臺中世界花卉博覽會─導覽志工培訓報名成功資訊！"; //信件標題
		$message = '<html><body>';
		$message .= '<p style="font-size:20px; font-family:Microsoft JhengHei;">親愛的'.strip_tags($_POST['name']).'：';
		$message .= '<p style="font-size:20px; font-family:Microsoft JhengHei;">您好。</p>';
		$message .= '<p style="font-size:20px; font-family:Microsoft JhengHei;">感謝您報名「2018臺中世界花卉博覽會」導覽志工「<span style="color: red;">特殊教育訓練</span>」。<br/>';
		$message .= '你報名的場次為：<span style="color: red;"><strong>'.strip_tags($_POST['event']).'</strong></span><br/>';
		$message .= '提醒您，上課要攜帶「<span style="color: red;"><strong>志工基礎教育訓練結業證書影本</strong></span>」及「<span style="color: red;"><strong>2張1吋大頭照片</strong></span>」<br/>';
		$message .= '詳細的上課地點及課程內容請參照報名系統之培訓場次，網址：<br/>';
		$message .= '<a href="http://website/2018exporegister/index.html">http://website/2018exporegister/index.html</a></p>';
		$message .= '<br/>';
		$message .= '<p style="font-size:20px; font-family:Microsoft JhengHei;">「2018臺中世界花卉博覽會」導覽志工培訓，期待與您相會。<br/>';
		$message .= '若有任何問題，歡迎來信或來電，我們將竭盡為您服務！</p><br/>';
		$message .= '<p style="font-size:20px; font-family:Microsoft JhengHei; text-align: right;">亞洲大學學務處服務學習組敬上</p>';
		$message .= '<p style="font-size:16px; font-family:Microsoft JhengHei;">服務專線：(04)23323456轉3295<br/>';
		$message .= '服務時間：週一至週五08:10-17:00<br/>';
		$message .= '服務信箱：<a href="mailto:yifong@asia.edu.tw">yifong@asia.edu.tw</a></p>';
		$message .= '<img src="http://website/2018exporegister/images/logo.png" alt="2018臺中世界花卉博覽會" />';
		$message .= '</body></html>';

		// To send HTML mail, the Content-type header must be set
		$headers = "Content-Type: text/html; charset=UTF-8". "\r\n";
		$headers .= "From: 亞大花博伺服器-勿直接回信 <openstackicehousegeek@gmail.com>"; //寄件者
		mail("$to", "$subject", "$message", "$headers");

		$sql_query = "INSERT INTO testadvance (`name`, `phone`, `telephone`, `identification`, `birthday`, `email`, `address`, `unit`, `position`, `food`, `event`, `BasicEvent`, `attachment`) VALUES (";
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
		$sql_query .=  "'".$_POST["BasicEvent"]."',";
    $sql_query .=  "'".$_FILES['attachment']['name']."')";
		$result = mysql_query($sql_query);
    $uploadLabFile ="";
  	if ($_FILES['attachment']['name'] != '' && $_FILES['attachment']['error'] == 0)
  	{
  		$filename = str_replace(" ","",$_FILES['attachment']['name']);
  		$uploadLabFile= $filename;
  		$pathFilename = iconv("UTF-8", "big5//TRANSLIT//IGNORE", $uploadLabFile);
  		move_uploaded_file($_FILES["attachment"]["tmp_name"], "./uploads/" .$pathFilename);
  	}
		// $result = mysql_query("INSERT INTO testbasic (name) VALUES ('$_POST[name]')");
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
		<img src="images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統">
		<h1 class="text-center">您已完成報名！</h1>
		<br />
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="text-center">
						<a href="advance.php">
							<button type="button" class="btn btn-primary btn-lg btn-block">
								<span>
									重新報名進階訓練
								</span>
							</button>
						</a>
						<a href="basic.php">
							<button type="button" class="btn btn-warning btn-lg btn-block successButton">
								<span>
									報名基礎訓練
								</span>
							</button>
						</a>
						<a href="http://website/2018expo">
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
	</body>

	</html>
