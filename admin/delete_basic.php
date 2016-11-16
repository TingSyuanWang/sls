<?php
	include("../db_setting.php");
	if (!@mysql_select_db("2018exporegister")) die("資料庫無法連結");
	if(isset($_POST["action"])&&($_POST["action"]=="delete")){
		$sql_query = "DELETE FROM `applybasic` WHERE `id`=".$_POST["id"];
		mysql_query($sql_query);
		// redirect
		header("Location: basic.php");
	}
	$sql_db = "SELECT * FROM `applybasic` WHERE `id`=".$_GET["id"];
	$result = mysql_query($sql_db);
	$row_result=mysql_fetch_assoc($result);
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>2018臺中世界花卉博覽會志工基礎訓練管理系統-刪除資料</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<script src="../js/style.js"></script>
		<script src="../js/bootstrap.js"></script>
	</head>

	<body>
		<h1 class="text-center"><strong>2018臺中世界花卉博覽會志工基礎訓練管理系統-刪除資料</strong></h1>
		<h3 class="text-center"><a href="basic.php">回主畫面</a></h3>
		<div class="container">
			<div class="row">
				<br />
				<div class="col-lg-12">
					<div class="table-responsive">
						<form action="" method="post" name="formDel" id="formDel" enctype="multipart/form-data">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>欄位</th>
										<th>資料</th>
									</tr>
								</thead>
								<tr>
									<td>姓名</td>
									<td>
										<?php echo $row_result["name"];?>
									</td>
								</tr>
								<tr>
									<td>電話</td>
									<td>
										<?php echo $row_result["phone"];?>
									</td>
								</tr>
								<tr>
									<td>手機</td>
									<td>
										<?php echo $row_result["telephone"];?>
									</td>
								</tr>
								<tr>
									<td>身份證字號</td>
									<td>
										<?php echo $row_result["identification"];?>
									</td>
								</tr>
								<tr>
									<td>生日</td>
									<td>
										<?php echo $row_result["birthday"];?>
									</td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td>
										<?php echo $row_result["email"];?>
									</td>
								</tr>
								<tr>
									<td>學校/機關/團體/社團</td>
									<td>
										<?php echo $row_result["unit"];?>
									</td>
								</tr>
								<tr>
									<td>系所/職稱</td>
									<td>
										<?php echo $row_result["position"];?>
									</td>
								</tr>
								<tr>
									<td>飲食習慣</td>
									<td>
										<?php echo $row_result["food"];?>
									</td>
								</tr>
								<tr>
									<td>報名場次</td>
									<td>
										<?php echo $row_result["event"];?>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input name="id" type="hidden" value="<?php echo $row_result["id"];?>" />
										<input name="action" type="hidden" value="delete" />
										<input type="submit" name="button" value="刪除此筆資料" class="btn btn-danger" />
									</td>
								</tr>
							</table>
							</table>
						</form>
					</div>
					<br />
				</div>
			</div>
	</body>

	</html>
