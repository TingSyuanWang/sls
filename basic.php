<?php
  include("db_setting.php");
  if (!@mysql_select_db("2018exporegister")) die("fail to connect to server!");

  // $sql="SELECT `id` FROM  `testbasic` WHERE `event`='105.12.10(六)-11(日) 亞洲大學'";
  // $result=mysql_query($sql) or die("查詢失敗");
  // echo mysql_num_rows($result);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>志工基礎訓練 | 2018臺中世界花卉博覽會導覽報名系統</title>
    <!-- bootstrap -->
    <script type="text/javascript" src="bower_components/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <!-- custom css/js -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/style.js"></script>
    <!-- responsive setting -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- datepicker -->
    <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <!-- moment zh-tw -->
    <script src="bower_components/moment/locale/zh-tw.js"></script>
    <script type="text/javascript" src="bower_components/moment/min/moment-with-locales.min.js"></script>
</head>

<body>
    <img src="images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統">
    <h1 class="text-center"><strong>志工基礎訓練報名</strong></h1>
    <h3 class="text-center"><a href="index.html">回主畫面</a></h3>
    <div class="container">
      <form action="upload_file.php" method="post" name="formadd" id="formadd" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="formTitle">姓名</label>
              <input type="text" class="form-control input-lg" id="name" name="name" placeholder="姓名" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone" class="formTitle">電話</label>
              <input type="text" class="form-control input-lg" id="phone" name="phone" placeholder="電話" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="telephone" class="formTitle">手機</label>
              <input type="text" class="form-control input-lg" id="telephone" name="telephone" placeholder="手機" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="identification" class="formTitle">身份證字號</label>
              <input type="text" class="form-control input-lg" id="identification" name="identification" placeholder="身份證字號" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
              <div class="form-group">
                  <label for="birthday" class="formTitle">生日(參與本活動需滿18歲)</label>
                  <div class='input-group date' id='birthday'>
                      <input type='text' class="form-control input-lg" name="birthday" required/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar">
                          </span>
                      </span>
                  </div>
              </div>
          </div>
          <script type="text/javascript">
              $(function () {
                  $('#birthday').datetimepicker({
                      format: 'YYYY-MM-DD',
                      maxDate: moment().subtract(18, 'years'),
                      viewMode: 'years',
                      locale:'zh-tw'
                  });
              });
          </script>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="formTitle">E-mail</label>
              <input type="email" class="form-control input-lg" id="email" name="email" placeholder="E-mail" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-12">
            <div class="form-group">
              <label for="address" class="formTitle">地址</label>
              <input type="text" class="form-control input-lg" id="address" name="address" placeholder="地址" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group" id="school">
                  <span class="input-group-addon formTitle"><input type="radio" id="inlineRadio1" value="school" name="organization"> 學校</span>
                  <select id="selectschool" name="selectschool" class="form-control" disabled="disabled">
                      <option>請選擇</option>
                      <option id="asia" value="asia">亞洲大學</option>
                      <option id="other" value="other">其它學校</option>
                  </select>
                  <span class="input-group-addon formTitle"><input type="radio" id="inlineRadio2" value="community" name="organization"> 機關/團體/社團</span>

                  <!-- insert this line -->
                  <span class="input-group-addon" style="width:0px; padding-left:0px; padding-right:0px; border:none;"></span>
              </div>
              <input type="text" class="form-control input-lg radioMarginFix" id="unit" name="unit" placeholder="" required>
              <script>
              $('#selectschool').change(function selectschool(){
                var selectschool = $("#selectschool option:selected").text();
                if (selectschool == "亞洲大學")
                  $("#unit").attr("placeholder", "學號");
                else if (selectschool == "其它學校")
                  $("#unit").attr("placeholder", "學校名稱");
              });
              $('#inlineRadio1').click(function() {
                 $('#selectschool').removeAttr("disabled")
                 $("#position").attr("placeholder", "系所");
              });
              $('#inlineRadio2').click(function() {
                 $('#selectschool').attr("disabled", 'disabled')
                 $("#position").attr("placeholder", "單位");
              });
              // 測試是否取得值
              // $('#school').change(function() {
              //     var val = $("#school option:selected").text();
              //     alert(val);
              // });
              </script>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="position" class="formTitle"><p00></p00></label>
              <input type="text" class="form-control input-lg inputMarginFix" id="position" name="position" placeholder="" required>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <script>
            $('input[name=organization]').click(function organization(){
              var organization = $('input[name=organization]:checked').val();
              if (organization == "school")
                $( "p00" ).html("系所");
              else
                $( "p00" ).html("職稱");
            });
            $( "input" ).change( organization );
            organization();
					</script>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="food" class="formTitle">飲食習慣</label>
              <select name="food" class="form-control input-lg" required>
                <option>葷食</option>
                <option>素食</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="event" class="formTitle">報名場次&nbsp;<a href="http://TESTFORWEB/2018expo/%E5%9F%B9%E8%A8%93%E5%A0%B4%E6%AC%A1/" target="_blank">(了解培訓場次資訊)</a></label>
              <select id="selectevent" name="event" class="form-control input-lg" required>
                <option>
                  請選擇
                </option>
                <option id="event01">
                  105.11.05(六)-06(日) 中國醫藥大學
                  <?php
                    $sql01="SELECT `id` FROM  `testbasic` WHERE `event`='105.11.05(六)-06(日) 中國醫藥大學'";
                    $option1 = 120;
                    $result01 = mysql_query($sql01);
                    $result1 = mysql_num_rows($result01);
                    $option1result = $option1 - $result1;
                    $alert01 = json_encode($option1result);
                  ?>
                </option>
                <option id="event02">
                  105.11.05(六)-06(日) 亞洲大學
                  <?php
                    $sql02="SELECT `id` FROM  `testbasic` WHERE `event`='105.11.05(六)-06(日) 亞洲大學'";
                    $option2 = 120;
                    $result02 = mysql_query($sql02);
                    $result2 = mysql_num_rows($result02);
                    $option2result = $option2 - $result2;
                    $alert02 = json_encode($option2result);
                  ?>
                </option>
                <option id="event03">
                  105.12.03(六)-04(日) 靜宜大學
                  <?php
                    $sql03="SELECT `id` FROM  `testbasic` WHERE `event`='105.12.03(六)-04(日) 靜宜大學'";
                    $option3 = 100;
                    $result03 = mysql_query($sql03);
                    $result3 = mysql_num_rows($result03);
                    $option3result = $option3 - $result3;
                    $alert03 = json_encode($option3result);
                  ?>
                </option>
                <option id="event04">
                  105.12.03(六)-04(日) 科博館
                  <?php
                    $sql04="SELECT `id` FROM  `testbasic` WHERE `event`='105.12.03(六)-04(日) 科博館'";
                    $option4 = 130;
                    $result04 = mysql_query($sql04);
                    $result4 = mysql_num_rows($result04);
                    $option4result = $option4 - $result4;
                    $alert04 = json_encode($option4result);
                  ?>
                </option>
                <option id="event05">
                  105.12.10(六)-11(日) 亞洲大學
                  <?php
                    $sql05="SELECT `id` FROM  `testbasic` WHERE `event`='105.12.10(六)-11(日) 亞洲大學'";
                    $option5 = 150;
                    $result05 = mysql_query($sql05);
                    $result5 = mysql_num_rows($result05);
                    $option5result = $option5 - $result5;
                    $alert05 = json_encode($option5result);
                  ?>
                </option>
                <option id="event06">
                  105.12.10(六)-11(日) 豐原高中
                  <?php
                    $sql06="SELECT `id` FROM  `testbasic` WHERE `event`='105.12.10(六)-11(日) 豐原高中'";
                    $option6 = 130;
                    $result06 = mysql_query($sql06);
                    $result6 = mysql_num_rows($result06);
                    $option6result = $option6 - $result6;
                    $alert06 = json_encode($option6result);
                  ?>
                </option>
              </select>
            </div>
            <!-- form-group -->
            <p class="formTitle">
              <p02></p02>
              <script>
                $('#selectevent').change(function selectevent(){
                  var selectevent = $("#selectevent option:selected").val();
                  var endEvent = "已額滿，無法報名！";
                  if (selectevent == "105.11.05(六)-06(日) 中國醫藥大學") {
                    var alert01 = new Array();
                    alert01 = "<?php echo $alert01;?>";
                    var alert01content = "剩餘報名人數：" + "<?php echo $alert01;?>";
                    if (alert01 > 0) {
                      $( "p02" ).html(alert01content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "105.11.05(六)-06(日) 亞洲大學") {
                    var alert02 = new Array();
                    alert02 = "<?php echo $alert02;?>";
                    var alert02content = "剩餘報名人數：" + "<?php echo $alert02;?>";
                    if (alert02 > 0) {
                      $( "p02" ).html(alert02content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "105.12.03(六)-04(日) 靜宜大學") {
                    var alert03 = new Array();
                    alert03 = "<?php echo $alert03;?>";
                    var alert03content = "剩餘報名人數：" + "<?php echo $alert03;?>";
                    if (alert03 > 0) {
                      $( "p02" ).html(alert03content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "105.12.03(六)-04(日) 靜宜大學") {
                    var alert04 = new Array();
                    alert04 = "<?php echo $alert04;?>";
                    var alert04content = "剩餘報名人數：" + "<?php echo $alert04;?>";
                    if (alert04 > 0) {
                      $( "p02" ).html(alert04content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "105.12.10(六)-11(日) 亞洲大學") {
                    var alert05 = new Array();
                    alert05 = "<?php echo $alert05;?>";
                    var alert05content = "剩餘報名人數：" + "<?php echo $alert05;?>";
                    if (alert05 > 0) {
                      $( "p02" ).html(alert05content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "105.12.10(六)-11(日) 豐原高中") {
                    var alert06 = new Array();
                    alert06 = "<?php echo $alert06;?>";
                    var alert06content = "剩餘報名人數：" + "<?php echo $alert06;?>";
                    if (alert06 > 0) {
                      $( "p02" ).html(alert06content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  }
                });
              </script>
            </p>
            <div id="wrongEvent" class="alert alert-danger hidden">
              <strong>該場次無法報名，請報名其他場次</strong>
            </div>
          </div>
          <!-- col -->
          <div class="col-md-12 center-block buttonMarginFix">
            <input id="submit" name="action" type="hidden" value="upload_file.php" />
            <div class="text-center"><input id="submit001" type="submit" class="btn btn-primary btn-lg"></input></div>
            <script>
              $( "#submit001" ).click(function() {
                var selectevent = $("#selectevent option:selected").val();
                if (selectevent == "105.11.05(六)-06(日) 中國醫藥大學") {
                  var alert01 = new Array();
                  alert01 = "<?php echo $alert01;?>";
                  if (alert01 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "105.11.05(六)-06(日) 亞洲大學") {
                  var alert02 = new Array();
                  alert02 = "<?php echo $alert02;?>";
                  if (alert02 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "105.12.03(六)-04(日) 靜宜大學") {
                  var alert03 = new Array();
                  alert03 = "<?php echo $alert03;?>";
                  if (alert03 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "105.12.03(六)-04(日) 靜宜大學") {
                  var alert04 = new Array();
                  alert04 = "<?php echo $alert04;?>";
                  if (alert04 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "105.12.10(六)-11(日) 亞洲大學") {
                  var alert05 = new Array();
                  alert05 = "<?php echo $alert05;?>";
                  if (alert05 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "105.12.10(六)-11(日) 豐原高中") {
                  var alert06 = new Array();
                  alert06 = "<?php echo $alert06;?>";
                  if (alert06 <= 0) {
                    alert("該場次無法報名，請報名其他場次");
                    return false;
                  }
                }
              });
            </script>
            <!-- <button id="singlebutton" name="submit" class="btn btn-primary center-block btn-lg">
                送出資料
            </button> -->
          </div>
          <div class="col-md-12">
            <div class="well well-lg fontChange">
              備註:<br />
              ※參加基礎教育訓練需全程參與12小時課程，始得基礎教育訓練結業證書<br />
              ※本志工訓練需滿18歲以上<br />
              ※E-mai行前通知用，各場次行前通知，於開課前2-3日以e-mail及網站公告為準<br />
              ※上述若有資格不符或繳交資料不齊全，影響課程結訓請自行負責<br />
              <br />
              聯絡方式：<br />
              亞洲大學<br />
              地址:台中市霧峰區柳豐路500號<br />
              電話：04-23323456#3295   傳真：04-23399525<br />
              e-mail：yifong@asia.edu.tw<br />
              服務時間：週一至週五08:00-17:00
            </div>
          </div>
        </div>
        <!-- row -->


      </form>
    </div>
    <!-- container -->
</body>

</html>
