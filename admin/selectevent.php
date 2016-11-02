<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$q = intval($_GET['q']);

("Content-Type: text/html; charset=utf-8");
include("../db_setting.php");
$seldb = @mysql_select_db("2018exporegister");
if (!$seldb) die("資料庫無法連結");
$sqlevent = null;
switch ($q) {
    case 0:
        $sql = "SELECT * FROM `testbasic` ORDER BY `id`";
        break;
    case 1:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.11.05(六)-06(日) 中國醫藥大學' ORDER BY `id`";
        break;
    case 2:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.11.05(六)-06(日) 亞洲大學' ORDER BY `id`";
        break;
    case 3:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.12.03(六)-04(日) 靜宜大學' ORDER BY `id`";
        break;
    case 4:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.12.03(六)-04(日) 科博館' ORDER BY `id`";
        break;
    case 5:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.12.10(六)-11(日) 亞洲大學' ORDER BY `id`";
        break;
    case 6:
        $sql = "SELECT * FROM  `testbasic` WHERE `event`='105.12.10(六)-11(日) 豐原高中' ORDER BY `id`";
        break;
}
$result = mysql_query($sql);


echo "
<div class=\"container-fluid\">
<div class=\"row\">
<br />
	<div class=\"col-md-12\">
    <div class=\"table-responsive\">
    	<table class=\"table table-striped\">
    	<thead>
        	<tr>
            	<th>編號</th>
              <th>姓名</th>
              <th>電話</th>
              <th>手機</th>
              <th>身分證字號</th>
              <th>生日</th>
              <th>E-mail</th>
              <th>地址</th>
              <th>學校/機關/團體/社團</th>
              <th>系所/職稱</th>
              <th>飲食習慣</th>
              <th>報名場次</th>
              <th>功能</th>
            </tr>
        </thead>";
while($row_result=mysql_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row_result["id"]."</td>";
  echo "<td>".$row_result["name"]."</td>";
  echo "<td>".$row_result["phone"]."</td>";
  echo "<td>".$row_result["telephone"]."</td>";
  echo "<td>".$row_result["identification"]."</td>";
  echo "<td>".$row_result["birthday"]."</td>";
  echo "<td>".$row_result["email"]."</td>";
  echo "<td>".$row_result["address"]."</td>";
  echo "<td>".$row_result["unit"]."</td>";
  echo "<td>".$row_result["position"]."</td>";
  echo "<td>".$row_result["food"]."</td>";
  echo "<td>".$row_result["event"]."</td>";
  echo "<td><a href='update_basic.php?id=".$row_result["id"]."'> 修改</a>";
  echo "<a href='delete_basic.php?id=".$row_result["id"]."'> 刪除</a></td>";
  echo "</tr>";
}
echo "</table>
</table>
</div>
<br />
</div>
</div>
</div>";
?>
</body>
</html>
