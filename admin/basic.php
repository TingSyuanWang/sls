<?php
	("Content-Type: text/html; charset=utf-8");
	include("../db_setting.php");
	$seldb = @mysql_select_db("2018exporegister");
	if (!$seldb) die("資料庫無法連結");
	// $sql_query = "SELECT * FROM `testbasic`";
	// $result = mysql_query($sql_query);
	// $total_records = mysql_num_rows($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>2018臺中世界花卉博覽會志工基礎訓練管理系統</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<script src="../js/style.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script>
	function selectEvent(str) {
	  if (str=="") {
	    document.getElementById("txtHint").innerHTML="";
	    return;
	  }
	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	      document.getElementById("txtHint").innerHTML=this.responseText;
	    }
	  }
	  xmlhttp.open("GET","selectevent.php?q="+str,true);
	  xmlhttp.send();
	}
	</script>
</head>

<body>
<h1 class="text-center"><strong>2018臺中世界花卉博覽會志工基礎訓練管理系統</strong></h1>
<h3 class="text-center"><a href="index.php">回主畫面</a></h3>
<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="text-center">
				<select name="selectEvent" onchange="selectEvent(this.value)" class="form-control">
				<option>請選擇</option>
				<option value="0">檢視全部</option>
				<option value="1">105.11.05(六)-06(日) 中國醫藥大學</option>
				<option value="2">105.11.05(六)-06(日) 亞洲大學</option>
				<option value="3">105.12.03(六)-04(日) 靜宜大學</option>
				<option value="4">105.12.03(六)-04(日) 科博館</option>
				<option value="5">105.12.10(六)-11(日) 亞洲大學</option>
				<option value="6">105.12.10(六)-11(日) 豐原高中</option>
			</select>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>

<div id="txtHint"><b></b></div>
<!-- <div class="container-fluid">
<div class="row">
<br />
	<div class="col-md-12">
    <div class="table-responsive">
    	<table class="table table-striped">
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
        </thead> -->
<?php
	// while($row_result=mysql_fetch_assoc($result)){
	// 	echo "<tr>";
	// 	echo "<td>".$row_result["id"]."</td>";
	// 	echo "<td>".$row_result["name"]."</td>";
	// 	echo "<td>".$row_result["phone"]."</td>";
	// 	echo "<td>".$row_result["telephone"]."</td>";
	// 	echo "<td>".$row_result["identification"]."</td>";
	// 	echo "<td>".$row_result["birthday"]."</td>";
	// 	echo "<td>".$row_result["email"]."</td>";
	// 	echo "<td>".$row_result["address"]."</td>";
	// 	echo "<td>".$row_result["unit"]."</td>";
	// 	echo "<td>".$row_result["position"]."</td>";
	// 	echo "<td>".$row_result["food"]."</td>";
	// 	echo "<td>".$row_result["event"]."</td>";
	// 	echo "<td><a href='update_basic.php?id=".$row_result["id"]."'> 修改</a>";
	// 	echo "<a href='delete_basic.php?id=".$row_result["id"]."'> 刪除</a></td>";
	// 	echo "</tr>";
	// }
?>
		<!-- </table>
    </table>
    </div>
<br />
</div>
</div>
</div> -->
</body>
</html>
