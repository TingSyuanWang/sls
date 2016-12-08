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

  // $sql="SELECT `id` FROM  `testbasic` WHERE `event`='第五場次 105.12.10(六)-11(日) 亞洲大學'";
  // $result=mysql_query($sql) or die("查詢失敗");
  // echo mysql_num_rows($result);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>志工基礎訓練 | 2018臺中世界花卉博覽會導覽報名系統</title>
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
  <script>
    jQuery(document).ready(function(){
        $('#agreement').modal('show');
    });
  </script>
  <div class="modal fade" tabindex="-1" role="dialog" id="agreement" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">歡迎您參加2018臺中世界花卉博覽會導覽志工特殊培訓，本特殊訓需有基本審查機制，敬請您詳閱並請確認以下事項：</h3>
        </div>
        <div class="modal-body">
          <p style="font-size:16px;">
          1. 您已年滿18歲(1998/1/1之後出生者)。<br />
          2. 對2018花博導覽志工具有熱忱及興趣。<br />
          3. 具有溝通表達能力。<br />
          4. 能配合值勤60小時以上者。 <br />
          5. 能配合志工招募規定，接受訓練與評核。<br />
          6. 本報名資料後續將移交給臺中市政府教育局，以利聯繫及志工使用。
          </p>
        </div>
        <div class="modal-footer">
          <button  id="disagree" type="button" class="btn btn-default" data-dismiss="modal">我不同意</button>
          <button id="agree" type="button" class="btn btn-primary">我同意</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script>
  $( "#disagree" ).click(function() {
    window.location.href = 'index.html';
  });
  $( "#agree" ).click(function() {
    $('#agreement').modal('hide')
  });
  </script>


    <img src="images/logo_2018expo.png" class="img-responsive center-block" alt="2018花博志工導覽報名系統">
    <h1 class="text-center"><strong>志工基礎訓練報名</strong></h1>
    <h3 class="text-center"><a href="index.html">回主畫面</a></h3>
    <div class="container">
      <form action="upload_file.php" method="post" name="formadd" id="formadd" enctype="multipart/form-data" data-toggle="validator" role="form">
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
              <label for="contacttime[]" class="formTitle">連絡時間(可複選)</label>
              <select name="contacttime[]" class="form-control selectpicker" data-actions-box="true" multiple>
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
              <label for="language[]" class="formTitle">擅長外國語言(可複選)</label>
              <select name="language[]" class="form-control selectpicker" data-actions-box="true" multiple>
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
              <label for="volunteerexp[]" class="formTitle">志工實務經驗(可複選)</label>
              <select name="volunteerexp[]" class="form-control selectpicker" data-actions-box="true" multiple>
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
              <label for="skill[]" class="formTitle">專長(可複選)</label>
              <select name="skill[]" class="form-control selectpicker" data-actions-box="true" multiple>
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
                if (selectschool == "亞洲大學")
                  $("#unit").attr("placeholder", "學號");
                else if (selectschool == "其它學校")
                  $("#unit").attr("placeholder", "學校名稱");
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
                  第一場次 105.11.05(六)-06(日) 中國醫藥大學
                  <?php
                    $sql01="SELECT `id` FROM  `testbasic` WHERE `event`='第一場次 105.11.05(六)-06(日) 中國醫藥大學'";
                    $option1 = 120;
                    $result01 = mysql_query($sql01);
                    $result1 = mysql_num_rows($result01);
                    $option1result = $option1 - $result1;
                    $alert01 = json_encode($option1result);
                  ?>
                </option>
                <option id="event02">
                  第二場次 105.11.05(六)-06(日) 亞洲大學
                  <?php
                    $sql02="SELECT `id` FROM  `testbasic` WHERE `event`='第二場次 105.11.05(六)-06(日) 亞洲大學'";
                    $option2 = 120;
                    $result02 = mysql_query($sql02);
                    $result2 = mysql_num_rows($result02);
                    $option2result = $option2 - $result2;
                    $alert02 = json_encode($option2result);
                  ?>
                </option>
                <option id="event03">
                  第三場次 105.12.03(六)-04(日) 靜宜大學
                  <?php
                    $sql03="SELECT `id` FROM  `testbasic` WHERE `event`='第三場次 105.12.03(六)-04(日) 靜宜大學'";
                    $option3 = 100;
                    $result03 = mysql_query($sql03);
                    $result3 = mysql_num_rows($result03);
                    $option3result = $option3 - $result3;
                    $alert03 = json_encode($option3result);
                  ?>
                </option>
                <option id="event04">
                  第四場次 105.12.03(六)-04(日) 科博館
                  <?php
                    $sql04="SELECT `id` FROM  `testbasic` WHERE `event`='第四場次 105.12.03(六)-04(日) 科博館'";
                    $option4 = 130;
                    $result04 = mysql_query($sql04);
                    $result4 = mysql_num_rows($result04);
                    $option4result = $option4 - $result4;
                    $alert04 = json_encode($option4result);
                  ?>
                </option>
                <option id="event05">
                  第五場次 105.12.10(六)-11(日) 亞洲大學
                  <?php
                    $sql05="SELECT `id` FROM  `testbasic` WHERE `event`='第五場次 105.12.10(六)-11(日) 亞洲大學'";
                    $option5 = 150;
                    $result05 = mysql_query($sql05);
                    $result5 = mysql_num_rows($result05);
                    $option5result = $option5 - $result5;
                    $alert05 = json_encode($option5result);
                  ?>
                </option>
                <option id="event06">
                  第六場次 105.12.10(六)-11(日) 豐原高中
                  <?php
                    $sql06="SELECT `id` FROM  `testbasic` WHERE `event`='第六場次 105.12.10(六)-11(日) 豐原高中'";
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
                  // 新增現在時間
                  var localTime = new Date();
                  var timeoutEvent = "時間已過，請報名其它場次！";
                  var endEventTime1 = '2016/11/04 14:00:00';
                  var endEventTime2 = '2016/11/04 14:00:00';
                  var endEventTime3 = '2016/12/02 14:00:00';
                  var endEventTime4 = '2016/12/02 14:00:00';
                  var endEventTime5 = '2016/12/09 14:00:00';
                  var endEventTime6 = '2016/12/09 14:00:00';
                  if (selectevent == "第一場次 105.11.05(六)-06(日) 中國醫藥大學") {
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
                  } else if (selectevent == "第二場次 105.11.05(六)-06(日) 亞洲大學") {
                    var alert02 = new Array();
                    alert02 = "<?php echo $alert02;?>";
                    var alert02content = "剩餘報名人數：" + "<?php echo $alert02;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime2).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert02 > 0) {
                      $( "p02" ).html(alert02content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第三場次 105.12.03(六)-04(日) 靜宜大學") {
                    var alert03 = new Array();
                    alert03 = "<?php echo $alert03;?>";
                    var alert03content = "剩餘報名人數：" + "<?php echo $alert03;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime3).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert03 > 0) {
                      $( "p02" ).html(alert03content);
                    } else {
                      $( "p02" ).html(endEvent);
                    }
                  } else if (selectevent == "第四場次 105.12.03(六)-04(日) 科博館") {
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
                  } else if (selectevent == "第五場次 105.12.10(六)-11(日) 亞洲大學") {
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
                  } else if (selectevent == "第六場次 105.12.10(六)-11(日) 豐原高中") {
                    var alert06 = new Array();
                    alert06 = "<?php echo $alert06;?>";
                    var alert06content = "剩餘報名人數：" + "<?php echo $alert06;?>";
                    if (Date.parse(localTime).valueOf() > Date.parse(endEventTime6).valueOf()) {
                      $( "p02" ).html(timeoutEvent);
                    } else if (alert06 > 0) {
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
                // 新增現在時間
                var localTime = new Date();
                var endEventTime1 = '2016/11/04 14:00:00';
                var endEventTime2 = '2016/11/04 14:00:00';
                var endEventTime3 = '2016/12/02 14:00:00';
                var endEventTime4 = '2016/12/02 14:00:00';
                var endEventTime5 = '2016/12/09 14:00:00';
                var endEventTime6 = '2016/12/09 14:00:00';
                if (selectevent == "第一場次 105.11.05(六)-06(日) 中國醫藥大學") {
                  var alert01 = new Array();
                  alert01 = "<?php echo $alert01;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime1).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert01 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "第二場次 105.11.05(六)-06(日) 亞洲大學") {
                  var alert02 = new Array();
                  alert02 = "<?php echo $alert02;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime2).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert02 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "第三場次 105.12.03(六)-04(日) 靜宜大學") {
                  var alert03 = new Array();
                  alert03 = "<?php echo $alert03;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime3).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert03 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "第三場次 105.12.03(六)-04(日) 靜宜大學") {
                  var alert04 = new Array();
                  alert04 = "<?php echo $alert04;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime4).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert04 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "第五場次 105.12.10(六)-11(日) 亞洲大學") {
                  var alert05 = new Array();
                  alert05 = "<?php echo $alert05;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime5).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert05 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                } else if (selectevent == "第六場次 105.12.10(六)-11(日) 豐原高中") {
                  var alert06 = new Array();
                  alert06 = "<?php echo $alert06;?>";
                  if (Date.parse(localTime).valueOf() > Date.parse(endEventTime6).valueOf()) {
                    alert("該場次時間已過，請報名其他場次");
                    return false;
                  } else if (alert06 <= 0) {
                    alert("該場次人數已滿，請報名其他場次");
                    return false;
                  }
                }
              });
            </script>
            <!-- <button id="singlebutton" name="submit" class="btn btn-primary center-block btn-lg">
                送出資料
            </button> -->
            <script>
              // 送出資料顯示跳轉頁面
              $("submit001").click(function(){
                $(this).after("<img src='images/gears.svg' alt='loading' />").fadeIn();
              });
            </script>
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
