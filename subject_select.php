<?php session_start();?>
<?php if(isset($_SESSION['startedOfAdmin'])){?>

<!DOCTYPE html>
<html>

<head>
  <title>subject select page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="bootstrap-select.js"></script>

  <link rel="stylesheet" href="css/w3.css">
  <style>
    body {
      background-color: #666666;
    }
  </style>
</head>

<body>
  <!-- NAVIGATION -->
  <div class="w3-top">
    <div class="w3-bar w3-deep-purple">
      <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION
        PORTAL<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Employee Name : ".$_SESSION['empName']."&nbsp;&nbsp;&nbsp;Selected Subject : ".$_SESSION['SubjectGV']." ";?></span>
      <span class="w3-right w3-mobile">
      </span>
    </div>
  </div><br><br><br><br>
  <marquee class="w3-red">Now explore our smart way to design your test parameters!</marquee>
  <div class="container">

    <br><br><br>
    <div class="panel panel-primary">
      <div class="panel-heading">Instructions:</div>
      <div class="panel-body"><b>Read the folowing instructions carefully before designing the test:</b></h3>
        <h5>1) Select only one subject from either FE or SE or TE or BE sections provide below.
          <br><br>
          2) Click on <i>'Select Subject'</i> button provided below. You will be redirected to the admin homepage and check the selected subject on navigation bar.<br><br>
        </h5>
        <br>
        <a class="w3-bar-item w3-button w3-mobile w3-red w3-hover-gray" href="adminSignIn.php">Back..</a>
      </div>
    </div>


    

    <div class="container">
      <form class="form-inline" role="form" action=session.php method="post">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="form-group">
          <label for="multipleSelect1" class="col-lg-2 control-label">FE</label>
          <br>
          <div class="col-lg-10">
            <select id="multipleSelect1" name="subjectSelection" class="selectpicker show-menu-arrow form-control" multiple>
              <option value="M-I">M-I</option>
              <option value="M-II">M-II</option>
              <option value="BCE">BCE</option>
              <option value="BME">BME</option>
              <option value="BXE">BXE</option>
              <option value="EG">EG</option>
              <option value="EP">EP</option>
              <option value="EC">EC</option>
              <option value="BEE">BEE</option>
              <option value="FPL-I">FPL-I</option>
              <option value="FPL-II">FPL-II</option>

            </select>
          </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group">
          <label for="multipleSelect2" class="col-lg-2 control-label">SE</label>
          <br>
          <div class="col-lg-10">
            <select id="multipleSelect2" name="subjectSelection" class="selectpicker show-menu-arrow form-control" multiple>
              <option value="DSA">DSA</option>
              <option value="OOP">OOP</option>
              <option value="IC">IC</option>
              <option value="S&S">S&S</option>
              <option value="M-III">M-III</option>
              <option value="CS">CS</option>
              <option value="DE">DE</option>
              <option value="EDC">EDC</option>
              <option value="AC">AC</option>
            </select>
          </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group">
          <label for="multipleSelect2" class="col-lg-2 control-label">TE</label>
          <br>
          <div class="col-lg-10">
            <select id="multipleSelect2" name="subjectSelection" class="selectpicker show-menu-arrow form-control" multiple>
              <option value="MC">MC</option>
              <option value="DC">DC</option>
              <option value="DSP">DSP</option>
              <option value="EM">EM</option>

              <option value="SPOS">SPOS</option>
              <option value="ITCTCN">ITCTCN</option>
              <option value="AP">AP</option>
              <option value="PE">PE</option>
              <option value="BM">BM</option>
            </select>
          </div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="form-group">
          <label for="multipleSelect2" class="col-lg-2 control-label">BE</label>
          <br>
          <div class="col-lg-10">
            <select id="multipleSelect2" name="subjectSelection" class="selectpicker show-menu-arrow form-control" multiple>


              <option value="IoT">IoT</option>
              <option value="RTOS">RTOS</option>
              <option value="CN">CN</option>
            </select>
          </div>
        </div><br><br><br><br>
        <center><button type="submit" class="btn btn-success" name="subjectSelectionButton">Select Subject</button></center>
      </form>
    </div>
    <br><br>


    <script>
      $(document).ready(function() {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function() {
          mySelect.find('option:selected').prop('disabled', true);
          mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function() {
          mySelect.find('option:disabled').prop('disabled', false);
          mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
          liveSearch: true,
          maxOptions: 1
        });
      });
    </script>
</body>

</html>
<?php }?>
