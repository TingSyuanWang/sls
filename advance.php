<!--
   #                 .-~~~~~~~~~-._       _.-~~~~~~~~~-.
   #             __.'              ~.   .~              `.__
   #           .'//                  \./                  \\`.
   #         .'//                     |                     \\`.
   #       .'// .-~"""""""~~~~-._     |     _,-~~~~"""""""~-. \\`.
   #     .'//.-"                 `-.  |  .-'                 "-.\\`.
   #   .'//______.============-..   \ | /   ..-============.______\\`.
   # .'______________________________\|/______________________________`.
   #
                            書本保佑  永無BUG
-->
<?php
  include("db_setting.php");
  if (!@mysql_select_db("2018exporegister")) die("fail to connect to server!");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>志工特殊教育訓練 | 2018臺中世界花卉博覽會導覽報名系統</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon-16x16.png"/>
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
    <!-- bootstrap select -->
    <link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.css">
    <script type="text/javascript" src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="bower_components/bootstrap-select/dist/js/i18n/defaults-zh_TW.min.js"></script>
</head>

<body>
    <img src="images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統">
    <h1 class="text-center"><strong>志工特殊教育訓練報名</strong></h1>
    <h3 class="text-center"><a href="index.html">回主畫面</a></h3>
    <div class="container">
      <form action="upload_file_advance.php" method="post" name="formadd" id="formadd" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="surname" class="formTitle">中文姓</label>
              <input type="text" class="form-control input-lg" id="surname" name="surname" placeholder="林">
            </div>
            <!-- form group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="name" class="formTitle">中文名</label>
              <input type="text" class="form-control input-lg" id="name" name="name" placeholder="怡君">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="ensurname" class="formTitle">英文姓</label>
              <input type="text" class="form-control input-lg" id="ensurname" name="ensurname" placeholder="LIN">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="enname" class="formTitle">英文名</label>
              <input type="text" class="form-control input-lg" id="enname" name="enname" placeholder="I-CHUN">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-2">
            <div class="form-group">
              <label for="nationality" class="formTitle">國籍</label>
              <select name="nationality" class="form-control input-lg">
                <option>本國籍</option>
                <option>非本國籍</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="identification" class="formTitle">身份證字號(非本國籍請填護照號碼)</label>
              <input type="text" class="form-control input-lg" id="identification" name="identification" placeholder="身份證字號(非本國籍請填護照號碼)">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="gender" class="formTitle">性別</label>
              <select name="gender" class="form-control input-lg">
                <option>男</option>
                <option>女</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
              <div class="form-group">
                  <label for="birthday" class="formTitle">生日(參與本活動需滿18歲)</label>
                  <div class='input-group date' id='birthday'>
                      <input type='text' class="form-control input-lg" name="birthday"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar">
                          </span>
                      </span>
                  </div>
              </div>
              <!-- form group -->
          </div>
          <!-- col -->
          <script type="text/javascript">
              $(function () {
                  $('#birthday').datetimepicker({
                      format: 'YYYY-MM-DD',
                      maxDate: '1999-01-01',
                      viewMode: 'years',
                      locale:'zh-tw'
                  });
              });
          </script>
          <div class="col-md-3">
            <div class="form-group">
              <label for="employment" class="formTitle">職業</label>
              <select name="employment" class="form-control input-lg">
                <option>學生</option>
                <option>工商人士</option>
                <option>公教人員</option>
                <option>退休公教人員</option>
                <option>退休非公教人員</option>
                <option>家管</option>
                <option>其它</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="education" class="formTitle">學歷</label>
              <select name="education" class="form-control input-lg">
                <option>博士</option>
                <option>碩士</option>
                <option>大學</option>
                <option>專科</option>
                <option>高中</option>
                <option>國中</option>
                <option>國小</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="phone" class="formTitle">電話</label>
              <input type="text" class="form-control input-lg" id="phone" name="phone" placeholder="電話">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-3">
            <div class="form-group">
              <label for="telephone" class="formTitle">手機</label>
              <input type="text" class="form-control input-lg" id="telephone" name="telephone" placeholder="手機">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="formTitle">E-mail</label>
              <input type="email" class="form-control input-lg" id="email" name="email" placeholder="E-mail">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="contacttime" class="formTitle">連絡時間(可複選)</label>
              <select name="contacttime" class="form-control selectpicker" data-actions-box="true" multiple>
                <option>早上09:00~12:00</option>
                <option>下午14:00~17:00</option>
                <option>晚上18:00~21:00</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="emcontacter" class="formTitle">緊急聯絡人姓名</label>
              <input type="text" class="form-control input-lg" id="emcontacter" name="emcontacter" placeholder="緊急聯絡人姓名">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="emphone" class="formTitle">緊急聯絡人電話</label>
              <input type="text" class="form-control input-lg" id="emphone" name="emphone" placeholder="緊急聯絡人電話">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="emrelationship" class="formTitle">與緊急聯絡人關係</label>
              <input type="text" class="form-control input-lg" id="emrelationship" name="emrelationship" placeholder="父子、兄弟、母女...">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="language" class="formTitle">擅長外國語言(可複選)</label>
              <select name="language" class="form-control selectpicker" data-actions-box="true" multiple>
                <option>台語</option>
                <option>國語</option>
                <option>英語</option>
                <option>法語</option>
                <option>西班牙語</option>
                <option>日語</option>
                <option>德語</option>
                <option>韓語</option>
                <option>俄語</option>
                <option>阿拉伯語</option>
                <option>義大利語</option>
                <option>土耳其語</option>
                <option>葡萄牙語</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="servicenumber" class="formTitle">服務紀錄冊冊號(若無請填無)</label>
              <input type="text" class="form-control input-lg" id="servicenumber" name="servicenumber" placeholder="無">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="volunteerexp" class="formTitle">志工實務經驗(可複選)</label>
              <select name="volunteerexp" class="form-control selectpicker" data-actions-box="true" multiple>
                <option>無</option>
                <option>綜合服務</option>
                <option>民政服務</option>
                <option>社會服務</option>
                <option>地政服務</option>
                <option>警政服務</option>
                <option>消防服務</option>
                <option>教育服務</option>
                <option>法務服務</option>
                <option>交通服務</option>
                <option>人事服務</option>
                <option>新聞服務</option>
                <option>衛生服務</option>
                <option>環保服務</option>
                <option>農業服務</option>
                <option>文化服務</option>
                <option>勞工服務</option>
                <option>導覽服務</option>
                <option>體育服務</option>
                <option>客委服務</option>
                <option>原住民服務</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="certification" class="formTitle">救護技術原或護理人員證照</label>
              <select name="certification" class="form-control input-lg">
                <option>有</option>
                <option>無</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="gesture" class="formTitle">是否具備手語能力</label>
              <select name="gesture" class="form-control input-lg">
                <option>是</option>
                <option>否</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <div class="form-group">
              <label for="skill" class="formTitle">專長(可複選)</label>
              <select name="skill" class="form-control selectpicker" data-actions-box="true" multiple>
                <option>無</option>
                <option>多媒體應用</option>
                <option>美編排版</option>
                <option>資訊處理</option>
                <option>電腦硬體</option>
                <option>領隊導遊</option>
                <option>緊急救護</option>
                <option>文書處理</option>
                <option>駕駛</option>
                <option>電腦基本操作</option>
                <option>智慧型手機基本操作</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="address" class="formTitle">戶籍地址(郵遞區號3碼+地址)</label>
              <input type="text" class="form-control input-lg" id="address" name="address" placeholder="413台中市霧峰區柳豐路500號">
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="contactaddress" class="formTitle">聯絡地址(郵遞區號3碼+地址) <input name="sameaddress" id="sameaddress" type="checkbox"  onclick="Filladdress(this.form)"> 同戶籍地址</label>
              <input type="text" class="form-control input-lg" id="contactaddress" name="contactaddress" placeholder="413台中市霧峰區柳豐路500號">
            </div>
            <!-- form-group -->
            <script>
            function Filladdress(f) {
              if (f.sameaddress.checked == true) {
                f.contactaddress.value = f.address.value;
              } else {
                f.contactaddress.value = '';
              }
            }
            </script>
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
              <input type="text" class="form-control input-lg radioMarginFix" id="unit" name="unit" placeholder="">
              <script>
              $('#selectschool').change(function selectschool(){
                var selectschool = $("#selectschool option:selected").text();
                if (selectschool == "亞洲大學") {
                  $("#unit").attr("placeholder", "學號");
                } else if (selectschool == "其它學校") {
                  $("#unit").attr("placeholder", "學校名稱");
                } else {
                  $("#unit").attr("placeholder", "請選學校");
                }
              });
              $('#inlineRadio1').click(function() {
                 $('#selectschool').removeAttr("disabled");
                 $("#unit").attr("placeholder", "請選學校");
                 $("#position").attr("placeholder", "系所");
              });
              $('#inlineRadio2').click(function() {
                 $('#selectschool').attr("disabled", 'disabled');
                 $("#unit").attr("placeholder", "單位");
                 $("#position").attr("placeholder", "職稱");
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
              <input type="text" class="form-control input-lg inputMarginFix" id="position" name="position" placeholder="">
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
					</script>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="food" class="formTitle">飲食習慣</label>
              <select name="food" class="form-control input-lg">
                <option>葷食</option>
                <option>素食</option>
              </select>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="event" class="formTitle">報名場次&nbsp;<a href="http://website/2018expo/%E5%9F%B9%E8%A8%93%E5%A0%B4%E6%AC%A1/" target="_blank">(了解培訓資訊場次及時間)</a></label>
              <select id="selectevent" name="event" class="form-control input-lg">
                <option>
                  請選擇
                </option>
                <option id="event01">
                  第一場次 105.10.30(日) 亞洲大學
                  <?php
                    $sql01="SELECT `id` FROM  `testadvance` WHERE `event`='第一場次 105.10.30(日) 亞洲大學'";
                    $option1 = 55;
                    $result01 = mysql_query($sql01);
                    $result1 = mysql_num_rows($result01);
                    $option1result = $option1 - $result1;
                    $alert01 = json_encode($option1result);
                  ?>
                </option>
                <option id="event02">
                  第二場次 105.11.12(六) 中國醫藥大學
                  <?php
                    $sql02="SELECT `id` FROM  `testadvance` WHERE `event`='第二場次 105.11.12(六) 中國醫藥大學'";
                    $option2 = 120;
                    $result02 = mysql_query($sql02);
                    $result2 = mysql_num_rows($result02);
                    $option2result = $option2 - $result2;
                    $alert02 = json_encode($option2result);
                  ?>
                </option>
                <option id="event03">
                  第三場次 105.11.13(日) 科博館
                  <?php
                    $sql03="SELECT `id` FROM  `testadvance` WHERE `event`='第三場次 105.11.13(日) 科博館'";
                    $option3 = 170;
                    $result03 = mysql_query($sql03);
                    $result3 = mysql_num_rows($result03);
                    $option3result = $option3 - $result3;
                    $alert03 = json_encode($option3result);
                  ?>
                </option>
                <option id="event04">
                  第四場次 105.11.16(三)-17(四) 亞洲大學
                  <?php
                    $sql04="SELECT `id` FROM  `testadvance` WHERE `event`='第四場次 105.11.16(三)-17(四) 亞洲大學'";
                    $option4 = 100;
                    $result04 = mysql_query($sql04);
                    $result4 = mysql_num_rows($result04);
                    $option4result = $option4 - $result4;
                    $alert04 = json_encode($option4result);
                  ?>
                </option>
                <option id="event05">
                  第五場次 105.11.20(日) 科博館
                  <?php
                    $sql05="SELECT `id` FROM  `testadvance` WHERE `event`='第五場次 105.11.20(日) 科博館'";
                    $option5 = 120;
                    $result05 = mysql_query($sql05);
                    $result5 = mysql_num_rows($result05);
                    $option5result = $option5 - $result5;
                    $alert05 = json_encode($option5result);
                  ?>
                </option>
                <option id="event06">
                  第六場次 105.11.26(六) 豐原高中
                  <?php
                    $sql06="SELECT `id` FROM  `testadvance` WHERE `event`='第六場次 105.11.26(六) 豐原高中'";
                    $option6 = 150;
                    $result06 = mysql_query($sql06);
                    $result6 = mysql_num_rows($result06);
                    $option6result = $option6 - $result6;
                    $alert06 = json_encode($option6result);
                  ?>
                </option>
                <option id="event07">
                  第七場次 105.11.27(日) 科博館
                  <?php
                    $sql07="SELECT `id` FROM  `testadvance` WHERE `event`='第七場次 105.11.27(日) 科博館'";
                    $option7 = 120;
                    $result07 = mysql_query($sql07);
                    $result7 = mysql_num_rows($result07);
                    $option7result = $option7 - $result7;
                    $alert07 = json_encode($option7result);
                  ?>
                </option>
                <option id="event08">
                  第八場次 105.11.30(三)-12.01(四) 亞洲大學
                  <?php
                    $sql08="SELECT `id` FROM  `testadvance` WHERE `event`='第八場次 105.11.30(三)-12.01(四) 亞洲大學'";
                    $option8 = 100;
                    $result08 = mysql_query($sql08);
                    $result8 = mysql_num_rows($result08);
                    $option8result = $option8 - $result8;
                    $alert08 = json_encode($option8result);
                  ?>
                </option>
                <option id="event09">
                  第九場次 105.12.17(六) 中國醫藥大學
                  <?php
                    $sql09="SELECT `id` FROM  `testadvance` WHERE `event`='第九場次 105.12.17(六) 中國醫藥大學'";
                    $option9 = 175;
                    $result09 = mysql_query($sql09);
                    $result9 = mysql_num_rows($result09);
                    $option9result = $option9 - $result9;
                    $alert09 = json_encode($option9result);
                  ?>
                </option>
                <option id="event010">
                  第十場次 105.12.18(日) 豐原高中
                  <?php
                    $sql010="SELECT `id` FROM  `testadvance` WHERE `event`='第十場次 105.12.18(日) 豐原高中'";
                    $option10 = 150;
                    $result010 = mysql_query($sql010);
                    $result10 = mysql_num_rows($result010);
                    $option10result = $option10 - $result10;
                    $alert010 = json_encode($option10result);
                  ?>
                </option>
                <option id="event011">
                  第十一場次 105.12.24(六) 靜宜大學
                  <?php
                    $sql011="SELECT `id` FROM  `testadvance` WHERE `event`='第十一場次 105.12.24(六) 靜宜大學'";
                    $option11 = 100;
                    $result011 = mysql_query($sql011);
                    $result11 = mysql_num_rows($result011);
                    $option11result = $option11 - $result11;
                    $alert011 = json_encode($option11result);
                  ?>
                </option>
                <option id="event012">
                  第十二場次 105.12.24(六) 科博館
                  <?php
                    $sql012="SELECT `id` FROM  `testadvance` WHERE `event`='第十二場次 105.12.24(六) 科博館'";
                    $option12 = 150;
                    $result012 = mysql_query($sql012);
                    $result12 = mysql_num_rows($result012);
                    $option12result = $option12 - $result12;
                    $alert012 = json_encode($option12result);
                  ?>
                </option>
              </select>
            </div>
            <!-- form group -->
            <p class="formTitle">
              <p02></p02>
              <script>
                $('#selectevent').change(function selectevent(){
                  var selectevent = $("#selectevent option:selected").val();
                  var endEvent = "已額滿，無法報名！";
                  // 新增現在時間
                  var localTime = new Date();
                  var timeoutEvent = "時間已過，請報名其它場次！";
                  var suspendEvent = "已更改場次，請報名其它場次！"
                  var endEventTime1 = '2016/10/28 14:00:00';
                  var endEventTime2 = '2016/11/11 14:00:00';
                  var endEventTime3 = '2016/11/7 14:00:00';
                  var endEventTime4 = '2016/11/15 14:00:00';
                  var endEventTime5 = '2016/11/18 14:00:00';
                  var endEventTime6 = '2016/11/25 14:00:00';
                  var endEventTime7 = '2016/11/25 14:00:00';
                  var endEventTime8 = '2016/11/29 14:00:00';
                  var endEventTime9 = '2016/12/16 14:00:00';
                  var endEventTime10 = '2016/12/16 14:00:00';
                  var endEventTime11 = '2016/12/23 14:00:00';
                  var endEventTime12 = '2016/12/23 14:00:00';
                  if (selectevent == "第一場次 105.10.30(日) 亞洲大學") {
                    var alert01 = new Array();
                    alert01 = "<?php echo $alert01;?>";
                    var alert01content = "剩餘報名人數：" + "<?php echo $alert01;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime1).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert01 > 0) {
                      $( "p02" ).html(alert01content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第二場次 105.11.12(六) 中國醫藥大學") {
                    var alert02 = new Array();
                    alert02 = "<?php echo $alert02;?>";
                    var alert02content = "剩餘報名人數：" + "<?php echo $alert02;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime2).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert02 > 0) {
                      $( "p02" ).html(alert02content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第三場次 105.11.13(日) 科博館") {
                    var alert03 = new Array();
                    alert03 = "<?php echo $alert03;?>";
                    var alert03content = "剩餘報名人數：" + "<?php echo $alert03;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime3).valueOf()) {
                      $( "p02" ).html(suspendEvent);
                    } else if (alert03 > 0) {
                      $( "p02" ).html(alert03content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第四場次 105.11.16(三)-17(四) 亞洲大學") {
                    var alert04 = new Array();
                    alert04 = "<?php echo $alert04;?>";
                    var alert04content = "剩餘報名人數：" + "<?php echo $alert04;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime4).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert04 > 0) {
                      $( "p02" ).html(alert04content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第五場次 105.11.20(日) 科博館") {
                    var alert05 = new Array();
                    alert05 = "<?php echo $alert05;?>";
                    var alert05content = "剩餘報名人數：" + "<?php echo $alert05;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime5).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert05 > 0) {
                      $( "p02" ).html(alert05content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第六場次 105.11.26(六) 豐原高中") {
                    var alert06 = new Array();
                    alert06 = "<?php echo $alert06;?>";
                    var alert06content = "剩餘報名人數：" + "<?php echo $alert06;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime6).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert06 > 0) {
                      $( "p02" ).html(alert06content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第七場次 105.11.27(日) 科博館") {
                    var alert07 = new Array();
                    alert07 = "<?php echo $alert07;?>";
                    var alert07content = "剩餘報名人數：" + "<?php echo $alert07;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime7).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert07 > 0) {
                      $( "p02" ).html(alert07content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第八場次 105.11.30(三)-12.01(四) 亞洲大學") {
                    var alert08 = new Array();
                    alert08 = "<?php echo $alert08;?>";
                    var alert08content = "剩餘報名人數：" + "<?php echo $alert08;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime8).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert08 > 0) {
                      $( "p02" ).html(alert08content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第九場次 105.12.17(六) 中國醫藥大學") {
                    var alert09 = new Array();
                    alert09 = "<?php echo $alert09;?>";
                    var alert09content = "剩餘報名人數：" + "<?php echo $alert09;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime9).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert09 > 0) {
                      $( "p02" ).html(alert09content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第十場次 105.12.18(日) 豐原高中") {
                    var alert010 = new Array();
                    alert010 = "<?php echo $alert010;?>";
                    var alert010content = "剩餘報名人數：" + "<?php echo $alert010;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime10).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert010 > 0) {
                      $( "p02" ).html(alert010content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第十一場次 105.12.24(六) 靜宜大學") {
                    var alert011 = new Array();
                    alert011 = "<?php echo $alert011;?>";
                    var alert011content = "剩餘報名人數：" + "<?php echo $alert011;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime11).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert011 > 0) {
                      $( "p02" ).html(alert011content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第十二場次 105.12.24(六) 科博館") {
                    var alert012 = new Array();
                    alert012 = "<?php echo $alert012;?>";
                    var alert012content = "剩餘報名人數：" + "<?php echo $alert012;?>" + "&nbsp;&nbsp;&nbsp;&nbsp;<strong>備註：本場次含外師課程</strong>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime12).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert012 > 0) {
                      $( "p02" ).html(alert012content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  }
                });
              </script>
            </p>
          </div>
          <!-- col -->
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="basicYet" class="formTitle">上傳基礎結業證書或志願服務紀錄冊</label>
              <select id="basicYet" name="basicYet" class="form-control input-lg">
                <option>請選擇</option>
                <option>已參加2018花博導覽志工舉辦之基礎教育訓練</option>
                <option>已有基礎結業證書</option>
                <option>已有取得志願服務紀錄冊</option>
              </select>
              <script>
                $('#basicYet').change(function basicYet() {
                  var basicYet = $("#basicYet option:selected").val();
                  if (basicYet == "已參加2018花博導覽志工舉辦之基礎教育訓練") {
                    $("#attachmentBlock").hide();
                    $("#chooseBasicEvent").show();
                  } else if (basicYet == "已有基礎結業證書") {
                    $("#chooseBasicEvent").hide();
                    $("#attachmentBlock").show();
                  } else if (basicYet == "已有取得志願服務紀錄冊") {
                    $("#chooseBasicEvent").hide();
                    $("#attachmentBlock").show();
                  } else {
                    $("#chooseBasicEvent").hide();
                    $("#attachmentBlock").hide();
                  }
                });
              </script>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div id="chooseBasicEvent" class="col-md-12" style="display:none">
            <div class="form-group">
              <label for="BasicEvent" class="formTitle">請選擇基礎報名場次</label>
              <select id="BasicEvent" name="BasicEvent" class="form-control input-lg">
                <option value="">請選擇</option>
                <option>基礎訓練第一場次105.11.05(六)-06(日) 中國醫藥大學</option>
                <option>基礎訓練第二場次105.11.05(六)-06(日) 亞洲大學</option>
                <option>基礎訓練第三場次105.12.03(六)-04(日) 科博館</option>
                <option>基礎訓練第四場次105.12.03(六)-04(日) 靜宜大學</option>
                <option>基礎訓練第五場次105.12.10(六)-11(日) 豐原高中</option>
                <option>基礎訓練第六場次105.12.10(六)-11(日) 亞洲大學</option>
              </select>
            </div>
          </div>
          <div id="attachmentBlock" class="col-md-12" style="display:none">
            <div class="form-group">
              <label for="attachment" class="formTitle">附件上傳<br />
              ※檔名請使用：上傳日期+姓名[例:20161001王大明])<br />
              ※格式請為PDF、jpg、jpeg 、gif 、png(限制10MB)<br />
              ※上傳檔案請使用電腦<br />
              ※若檔案較大，請耐心等待頁面跳轉，勿重複送出。</label>
              <input type="file" id="attachment" name="attachment" class="formTitle" accept=".pdf,.jpg,.jpeg,.png,.gif">
              <script>
              $("#attachment").change(function() {
                 var val = $(this).val();
                 switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                     case 'pdf': case 'jpg': case 'jpeg': case 'png': case 'gif':
                         break;
                     default:
                         $(this).val('');
                         // error message here
                         alert("不支援您所選擇的檔案格式，請重新選擇！");
                         break;
                 }
              });
              $('#attachment').bind('change', function() {
                if (this.files[0].size > 10000000) {
                  alert("超過檔案限制上傳限制，檔案請勿大於10MB");
                  return false;
                }
              });
              </script>
            </div>
            <!-- form-group -->
          </div>
          <!-- col -->
          <div class="col-md-12 center-block buttonMarginFix">
            <input id="submit" name="action" type="hidden" value="upload_file_advance.php" />
            <div class="text-center"><input id="submit001" type="submit" class="btn btn-primary btn-lg"></input></div>
          <script>
            $( "#submit001" ).click(function() {
              var selectevent = $("#selectevent option:selected").val();
              var localTime = new Date();
              var endEventTime1 = '2016/10/28 14:00:00';
              var endEventTime2 = '2016/11/11 14:00:00';
              var endEventTime3 = '2016/11/11 14:00:00';
              var endEventTime4 = '2016/11/15 14:00:00';
              var endEventTime5 = '2016/11/18 14:00:00';
              var endEventTime6 = '2016/11/25 14:00:00';
              var endEventTime7 = '2016/11/25 14:00:00';
              var endEventTime8 = '2016/11/29 14:00:00';
              var endEventTime9 = '2016/12/16 14:00:00';
              var endEventTime10 = '2016/12/16 14:00:00';
              var endEventTime11 = '2016/12/23 14:00:00';
              var endEventTime12 = '2016/12/23 14:00:00';
              if (selectevent == "第一場次 105.10.30(日) 亞洲大學") {
                var alert01 = new Array();
                alert01 = "<?php echo $alert01;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime1).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert01 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第二場次 105.11.12(六) 中國醫藥大學") {
                var alert02 = new Array();
                alert02 = "<?php echo $alert02;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime2).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert02 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第三場次 105.11.13(日) 科博館") {
                var alert03 = new Array();
                alert03 = "<?php echo $alert03;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime3).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert03 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第四場次 105.11.16(三)-17(四) 亞洲大學") {
                var alert04 = new Array();
                alert04 = "<?php echo $alert04;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime4).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert04 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第五場次 105.11.20(日) 科博館") {
                var alert05 = new Array();
                alert05 = "<?php echo $alert05;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime5).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert05 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第六場次 105.11.26(六) 豐原高中") {
                var alert06 = new Array();
                alert06 = "<?php echo $alert06;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime6).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert06 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第七場次 105.11.27(日) 科博館") {
                var alert07 = new Array();
                alert07 = "<?php echo $alert07;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime7).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert07 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第八場次 105.11.30(三)-12.01(四) 亞洲大學") {
                var alert08 = new Array();
                alert08 = "<?php echo $alert08;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime8).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert08 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第九場次 105.12.17(六) 中國醫藥大學") {
                var alert09 = new Array();
                alert09 = "<?php echo $alert09;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime9).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert09 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第十場次 105.12.18(日) 豐原高中") {
                var alert010 = new Array();
                alert010 = "<?php echo $alert010;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime10).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert010 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第十一場次 105.12.24(六) 靜宜大學") {
                var alert011 = new Array();
                alert011 = "<?php echo $alert011;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime11).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert011 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              } else if (selectevent == "第十二場次 105.12.24(六) 科博館")  {
                var alert012 = new Array();
                alert012 = "<?php echo $alert012;?>";
                if (Date.parse(localTime).valueOf() > Date.parse(endEventTime12).valueOf()) {
                  alert("該場次時間已過，請報名其他場次");
                  return false;
                } else if (alert012 <= 0) {
                  alert("該場次人數已滿，請報名其他場次");
                  return false;
                }
              }
              var fsize = $('#attachment')[0].files[0].size;
              if (fsize > 10000000) {
                alert("超過檔案限制上傳限制，請重新選擇檔案！");
                return false;
              }
            });
          </script>
        </div>
          <div class="col-md-12">
            <div class="well well-lg fontChange">
              備註:<br />
              ※報名特殊教育訓練者，上課當天須繳交，志工基礎訓練結業證書影本<br />
              ※報名特殊教育訓練者，上課當天須另繳交一吋照片2張<br />
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
