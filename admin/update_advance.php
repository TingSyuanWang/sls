<?php
	include("../db_setting.php");
	if (!@mysql_select_db("2018exporegister")) die("資料庫無法連結");
	if(isset($_POST["action"])&&($_POST["action"]=="update")){
		$sql_query = "UPDATE `testadvance` SET ";
		$sql_query .=  "`name`='".$_POST["name"]."',";
		$sql_query .=  "`phone`='".$_POST["phone"]."',";
		$sql_query .=  "`telephone`='".$_POST["telephone"]."',";
		$sql_query .=  "`identification`='".$_POST["identification"]."',";
		$sql_query .=  "`birthday`='".$_POST["birthday"]."',";
		$sql_query .=  "`email`='".$_POST["email"]."',";
		$sql_query .=  "`address`='".$_POST["address"]."',";
		$sql_query .=  "`unit`='".$_POST["unit"]."',";
		$sql_query .=  "`position`='".$_POST["position"]."',";
		$sql_query .=  "`food`='".$_POST["food"]."',";
		$sql_query .=  "`event`='".$_POST["event"]."' ";
		$sql_query .= "WHERE `id`=".$_POST["id"];
		$result = mysql_query($sql_query);
		// redirect
		header("Location: advance.php");
	}
	$sql_db = "SELECT * FROM `testadvance` WHERE `id`=".$_GET["id"];
	$result = mysql_query($sql_db);
	$row_result=mysql_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>2018臺中世界花卉博覽會志工基礎訓練管理系統-修改資料</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<script src="../js/style.js"></script>
	<script src="../js/bootstrap.js"></script>
</head>

<body>
<h1 class="text-center"><strong>2018臺中世界花卉博覽會志工基礎訓練管理系統-修改資料</strong></h1>
<h3 class="text-center"><a href="index.php">回主畫面</a></h3>
<div class="container">
<div class="row">
<br />
	<div class="col-lg-12">
    <div class="table-responsive">
    <form action="" method="post" name="formFix" id="formFix">
    	<table class="table table-striped">
    	<thead>
        	<tr>
            	<th>欄位</th>
                <th>資料</th>
            </tr>
        </thead>
        	<tr>
            	<td>姓名</td>
                <td><input class="form-control" type="text" name="name" id="name" value="<?php echo $row_result["name"];?>" /></td>
        	</tr>
            <tr>
            	<td>電話</td>
                <td><input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row_result["phone"];?>" /></td>
        	</tr>
            <tr>
            	<td>手機</td>
                <td><input class="form-control" type="text" name="telephone" id="telephone" value="<?php echo $row_result["telephone"];?>" /></td>
        	</tr>
            <tr>
            	<td>身分證字號</td>
                <td><input class="form-control" type="text" name="identification" id="identification" value="<?php echo $row_result["identification"];?>" /></td>
        	</tr>
            <tr>
            	<td>生日</td>
                <td><input class="form-control" type="text" name="birthday" id="birthday" value="<?php echo $row_result["birthday"];?>" /></td>
        	</tr>
            <tr>
            	<td>E-mail</td>
                <td><input class="form-control" type="text" name="email" id="email" value="<?php echo $row_result["email"];?>" /></td>
        	</tr>
            <tr>
            	<td>地址</td>
                <td><input class="form-control" type="text" name="address" id="address" value="<?php echo $row_result["address"];?>" /></td>
        	</tr>
            <tr>
            	<td>學校/機關/團體/社團</td>
                <td><input class="form-control" type="text" name="unit" id="unit" value="<?php echo $row_result["unit"];?>" /></td>
        	</tr>
            <tr>
            	<td>系所/職稱</td>
                <td><input class="form-control" type="text" name="position" id="position" value="<?php echo $row_result["position"];?>" /></td>
        	</tr>
            <tr>
            	<td>飲食習慣</td>
              <td>
              <input type="radio" name="food" id="food" value="葷食" <?php if($row_result["food"]=="葷食") echo "checked";?> />葷食
              <input type="radio" name="food" id="food" value="素食" <?php if($row_result["food"]=="素食") echo "checked";?> />素食
              </td>
        	</tr>
            <tr>
            	<td>報名場次</td>
                <td>
                <input type="radio" name="event" id="event" value="105.10.30(日) 亞洲大學" <?php if($row_result["event"]=="105.10.30(日) 亞洲大學") echo "checked";?> />105.10.30(日) 亞洲大學<br />
                <input type="radio" name="event" id="event" value="105.11.12(六) 中國醫藥大學" <?php if($row_result["event"]=="105.11.12(六) 中國醫藥大學") echo "checked";?> />105.11.12(六) 中國醫藥大學<br />
                <input type="radio" name="event" id="event" value="105.11.13(日) 科博館" <?php if($row_result["event"]=="105.11.13(日) 科博館") echo "checked";?> />105.11.13(日) 科博館<br />
                <input type="radio" name="event" id="event" value="105.11.16(三)-17(四) 亞洲大學" <?php if($row_result["event"]=="105.11.16(三)-17(四) 亞洲大學") echo "checked";?> />105.11.16(三)-17(四) 亞洲大學<br />
                <input type="radio" name="event" id="event" value="105.11.20(日) 科博館" <?php if($row_result["event"]=="105.11.20(日) 科博館") echo "checked";?> />105.11.20(日) 科博館<br />
                <input type="radio" name="event" id="event" value="105.11.26(六) 豐原高中" <?php if($row_result["event"]=="105.11.26(六) 豐原高中") echo "checked";?> />105.11.26(六) 豐原高中<br />
                <input type="radio" name="event" id="event" value="105.11.27(日) 科博館" <?php if($row_result["event"]=="105.11.27(日) 科博館") echo "checked";?> />105.11.27(日) 科博館<br />
                <input type="radio" name="event" id="event" value="105.11.30(三)-12.01(四) 亞洲大學" <?php if($row_result["event"]=="105.11.30(三)-12.01(四) 亞洲大學") echo "checked";?> />105.11.30(三)-12.01(四) 亞洲大學<br />
                <input type="radio" name="event" id="event" value="105.12.17(六) 中國醫藥大學" <?php if($row_result["event"]=="105.12.17(六) 中國醫藥大學") echo "checked";?> />105.12.17(六) 中國醫藥大學<br />
                <input type="radio" name="event" id="event" value="105.12.18(日) 豐原高中" <?php if($row_result["event"]=="105.12.18(日) 豐原高中") echo "checked";?> />105.12.18(日) 豐原高中<br />
                <input type="radio" name="event" id="event" value="105.12.24(六) 靜宜大學" <?php if($row_result["event"]=="105.12.24(六) 靜宜大學") echo "checked";?> />105.12.24(六) 靜宜大學<br />
                <input type="radio" name="event" id="event" value="105.12.24(六) 科博館" <?php if($row_result["event"]=="105.12.24(六) 科博館") echo "checked";?> />105.12.24(六) 科博館<br />
                </td>
        	</tr>
            <tr>
            	<td colspan="2" align="center">
                <input name="id" type="hidden" value="<?php echo $row_result["id"];?>" />
                <input name="action" type="hidden" value="update" />
                <input type="submit" name="button" value="更新資料" class="btn btn-success" />
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
