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
        $sql = "SELECT * FROM `testadvance` ORDER BY `id`";
        break;
    case 1:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第一場次 105.10.30(日) 亞洲大學' ORDER BY `id`";
        break;
    case 2:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第二場次 105.11.12(六) 中國醫藥大學' ORDER BY `id`";
        break;
    case 3:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第三場次 105.11.13(日) 科博館' ORDER BY `id`";
        break;
    case 4:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第四場次 105.11.16(三)-17(四) 亞洲大學' ORDER BY `id`";
        break;
    case 5:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第五場次 105.11.20(日) 科博館' ORDER BY `id`";
        break;
    case 6:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第六場次 105.11.26(六) 豐原高中' ORDER BY `id`";
        break;
    case 7:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第七場次 105.11.27(日) 科博館' ORDER BY `id`";
        break;
    case 8:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第八場次 105.11.30(三)-12.01(四) 亞洲大學' ORDER BY `id`";
        break;
    case 9:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第九場次 105.12.17(六) 中國醫藥大學' ORDER BY `id`";
        break;
    case 10:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第十場次 105.12.18(日) 豐原高中' ORDER BY `id`";
        break;
    case 11:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第十一場次 105.12.24(六) 靜宜大學' ORDER BY `id`";
        break;
    case 12:
        $sql = "SELECT * FROM  `testadvance` WHERE `event`='第十二場次 105.12.24(六) 科博館' ORDER BY `id`";
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
              <th>語言</th>
              <th>連絡時間(可複選)</th>
              <th>志工實務經驗(可複選)</th>
              <th>專長(可複選)</th>
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
              <th>上傳基礎結業證書或志願服務紀錄冊</th>
              <th>已參加基礎場次</th>
              <th>附件上傳</th>
              <th>功能</th>
            </tr>
        </thead>";
while($row_result=mysql_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row_result["id"]."</td>";
  echo "<td>".$row_result["language"]."</td>";
  echo "<td>".$row_result["contacttime"]."</td>";
  echo "<td>".$row_result["volunteerexp"]."</td>";
  echo "<td>".$row_result["skill"]."</td>";
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
  echo "<td>".$row_result["basicYet"]."</td>";
  echo "<td>".$row_result["BasicEvent"]."</td>";
  echo "<td>"."<a target=\"_blank\" href=\"../uploads/".$row_result["attachment"]."\">".$row_result["attachment"]."</a>"."</td>";
  echo "<td><a href='update_advance.php?id=".$row_result["id"]."'> 修改</a>";
  echo "<a href='delete_advance.php?id=".$row_result["id"]."'> 刪除</a></td>";
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
