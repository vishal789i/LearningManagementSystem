<?php session_start();
	if(isset($_SESSION['startedOfStudent']) ){
	include_once 'DBConnection.php';
?>
<?php ?>
<!-- saved from url=(0037)file:///C:/Users/Dell/Desktop/qu.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="js/sweetalert-dev.js"></script>
<link rel="stylesheet" href="css/sweetalert.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html {
  scroll-behavior: smooth; 
}

* {box-sizing: border-box}
body {
	font-family: "Lato", sans-serif;
	background-color: white;
}

/* Style the tab */
.tab {
  float: left;
  width: 20%;
}
div.c {
  text-align: right;
  width:1310px;
} 
/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: 1px solid steelblue;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

.tabcontent {
    float: left;
    padding: 0px 12px;
    /* border: 1px solid #fffefe; */
    width: 80%;
    border-left: none;
    height: max-height;
}

.time{
    margin-top:-20px;
	margin-bottom: 10px;
   text-align:right;
   font-size:20px;
}
   
   
.timerslot
{
	width:1300px;
	height:50px;
	margin-top:-20px;
}
	
   /*scrol up button*/
 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
}
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}


.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.danger {background-color: #f44336;}

.label {
  color: white;
  padding: 8px;
  font-family: Arial;
}
 
.grid-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  font-size: 1px;
  border:1px;	
  text-align: center;
}

button {
  height:60px;
  background-color:#fff;
  border-radius:3px;
  border: 1px solid #c4c4c4;
  background-color: transparent;
  font-size: 2rem;
  color: #333;
  background-image: linear-gradient(to bottom,transparent,transparent 50%,rgba(0,0,0,.04));
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.05), inset 0 1px 0 0 rgba(255,255,255,.45), inset 0 -1px 0 0 rgba(255,255,255,.15), 0 1px 0 0 rgba(255,255,255,.15);
  text-shadow: 0 1px rgba(255,255,255,.4);
}

<!for legend>
fieldset.scheduler-border {
    border: 15 px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }


 .bs-example{
    	margin: 80px;
    }
	.modal-header {
    padding: 15px;
    border-bottom: 1px solid #ffffff;
    background-color: #77b5ff;
    color: #f6fbff;
}
.modal-body {
    position: relative;
    padding: 50px 170px;
}

.tab button {
    display: block;
    background-color: inherit;
    color: #340ae6;
    padding: 22px 16px;
    width: 100%;
    border: 1px solid steelblue;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

img {
    border: 2px solid white;
}
</style>
</head>
<body>

<?php $_SESSION['instructionPage'] = true;?>

<?php $_SESSION['timerSetByQuestionPaper'] = time(); ?>

<nav class="navbar navbar-inverse  navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
	 <ul class="nav navbar-nav navbar-left">
	  <li><img src="images/pass.png" height="70px" width="60px"></img>
      <li><a href="file:///C:/Users/Dell/Desktop/qu.html#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['studentName']; ?></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="file:///C:/Users/Dell/Desktop/qu.html#">MCQ section</a></li>
	  <li> <a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>.&nbsp;Calculator</a></li>
    </ul>
	
	 
  </div>
</nav>

<div class="panel panel-default w3-gray">
 
  <br><br><br><br>
  
<?php
	$sqlSelectTime = "SELECT * FROM adminvariables where subject =  '".$_SESSION["subject"]."' ";
	$resultTime = mysqli_query($conn, $sqlSelectTime);
	$time = 0;
	while($row = mysqli_fetch_assoc($resultTime) ) {
		$time = $row["time"];
		$_SESSION["examName"] = $row["examName"];
	}
?>
  <div class="panel-body" >
  
 <text text-align="left" >Exam:<?php echo $_SESSION["examName"]; ?>

<div class="time">Time Left: <span id="time"><?php echo $time; ?>m 00s</span></div>
</text></text></div>
</div>


<!-- timer section -->

<script>
	var requiredTime = <?php echo $time; ?>;	//change this variable
	
	var deadline = new Date();
	deadline.setMinutes( deadline.getMinutes() + requiredTime );
	
	var date = new Date();

	var x = setInterval(function() { 
	var now = new Date().getTime(); 
	var t = deadline - now; 
	
	var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
	var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
	var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
	var seconds = Math.floor((t % (1000 * 60)) / 1000); 
	document.getElementById("time").innerHTML = minutes + "m " + seconds + "s "; 
	
		if (t < 0) { 
			clearInterval(x); 
			document.getElementById("time").innerHTML = "EXPIRED"; 
			document.getElementById("questionsForm").submit();
		}
	}, 1000);
</script> 
<!-- end of timer section -->
<?php //$maxQuestions = $_SESSION['maxQuestions']; ?>

<script type="text/javascript">
function JSalert(){
	swal({
	  title: "Are you sure you want to submit the exam ?",
	  text: "Click OK to Submit",
	  type: "warning",
	  showCancelButton: true,
	  closeOnConfirm: false,
	  showLoaderOnConfirm: true
	}, function () {
		setTimeout(function () {
		swal("Answers successfully Submitted!");
		document.getElementById("questionsForm").submit();
	  }, 2000);
	});
}

</script>

<?php
/*	$sqlOne = "SELECT * FROM question_set WHERE M = 1 AND subjectName = ".$_SESSION['subject'];
	$resultOne = mysqli_query($conn, $sqlOne);
	
	$numbersOne = array();
	$countOne = 0;

	while($row = mysqli_fetch_assoc($resultOne)) {
		if($countOne < $noOfOneMarkQuestions){
			$numbersOne[$countOne++] = $row["sr_no"];
		}
	}
	
	$sql = "SELECT * FROM question_set WHERE M = 2 AND subjectName = '".$_SESSION['subject']."'";
	$result = mysqli_query($conn, $sql);
	
	$numbers = array();
	$count = 0;

	while($row = mysqli_fetch_assoc($result)) {
		if($count < $noOfTwoMarkQuestions){
			$numbers[$count++] = $row["sr_no"];
		}
	}
	$finalArray = array_merge($numbersOne, $numbers);
	shuffle($finalArray);
	$length = count($finalArray);
	$_SESSION['globalLength'] = $length;
	*/
?>

<?php 
	$conn = mysqli_connect("localhost", "root", "", "online_exam");
	$sqlSelect = "select * from user";
	$result = mysqli_query($conn, $sqlSelect);
	$coArr = array();
	$k = 1;
	while($row = mysqli_fetch_assoc($result) ) {
		$coArray['co'.$k]['co'] = $row['co'];
		$coArray['co'.$k]['weight'] = $row['weight'];
		$coArray['co'.$k]['coMarks'] = $row['coMarks']; 
		$coArray['co'.$k]['unit1_1'] = $row['unit1_1']; 
		$coArray['co'.$k]['unit1_2'] = $row['unit1_2']; 
        $coArray['co'.$k]['unit2_1'] = $row['unit2_1']; 
        $coArray['co'.$k]['unit2_2'] = $row['unit2_2']; 
        $coArray['co'.$k]['unit3_1'] = $row['unit3_1']; 
        $coArray['co'.$k]['unit3_2'] = $row['unit3_2']; 
        $coArray['co'.$k]['unit4_1'] = $row['unit4_1'];
        $coArray['co'.$k]['unit4_2'] = $row['unit4_2'];
        $coArray['co'.$k]['unit5_1'] = $row['unit5_1'];
        $coArray['co'.$k]['unit5_2'] = $row['unit5_2'];
        $coArray['co'.$k]['unit6_1'] = $row['unit6_1'];
        $coArray['co'.$k]['unit6_2'] = $row['unit6_2'];
		$k++;
	}
	$numbersOne = array();
	$countOne = 0;
	$numbers = array();
	$count = 0;
	$arrOneIndex = 0;
	$arrTwoIndex = 0;
	for($i = 1; $i <= 10 ; $i++) {
		for($j = 1; $j <= 6; $j++) {
			$noOfOneMarkQuestions = $coArray['co'.$i]['unit'.$j.'_1'];
			$noOfTwoMarkQuestions = $coArray['co'.$i]['unit'.$j.'_2'];
			if($noOfOneMarkQuestions > 0) {
				$sqlOne = "SELECT sr_no FROM question_set WHERE m = 1 AND unit = ".$j." and co = ".$i." AND subjectName = '".$_SESSION['subject']."'";
				$resultOne = mysqli_query($conn, $sqlOne);
				while($row = mysqli_fetch_assoc($resultOne)) {
					if($countOne < $noOfOneMarkQuestions){
						$numbersOne[$arrOneIndex++] = $row["sr_no"];
						$countOne++;
					}
				}
				$countOne = 0;
			}
			if($noOfTwoMarkQuestions > 0) {
				$sql = "SELECT sr_no FROM question_set WHERE m = 2 AND unit = ".$j." and co = ".$i." AND subjectName = '".$_SESSION['subject']."'";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) {
					if($count < $noOfTwoMarkQuestions){
						$numbers[$arrTwoIndex++] = $row["sr_no"];
						$count++;
					}
				}
				$count = 0;				
			}
		}			
	}
	$_SESSION['oneMarks'] = $arrOneIndex;
	$_SESSION['twoMarks'] = $arrTwoIndex;
	
	$finalArray = array_merge($numbersOne, $numbers);
	shuffle($finalArray);
	$length = count($finalArray);
	$_SESSION['maxQuestions'] = $length;
?>


<script>
	function setColor(btn, color){
		var property = document.getElementById(btn);
		property.style.backgroundColor = color
		property.style.color="white";
	}
	function setColor1(btn, color){
		var property = document.getElementById(btn);
		property.style.backgroundColor = "#FFFFFF"
		property.style.color="black";
	}
	
</script>

<div class="tab">
<br>
<div class="grid-container">
			<button class="w3-hover-deep-purple" onclick="openCity(event, 'question1')" id="defaultOpen1">1</button>
<?php for($i=2; $i<=$length; $i++){?>
			<button class="w3-hover-deep-purple" onclick="openCity(event, 'question<?php echo $i;?>')" id="defaultOpen<?php echo $i; ?>"><?php echo $i;?></button>
<?php } ?>	
</div>

<br>
<button  style="background-color:#a6defc;"class="w3-hover-red" type="submit" form="" onclick="JSalert()"><center>Submit Exam</center></button></div>
<br>


<form action="questionPagePHP.php" class="new" method = "post" id = "questionsForm">

<?php for ($i = 1; $i <= $length; $i++) {?>

    <?php 
    $sqlQuestion = "SELECT * FROM question_set WHERE sr_no = '".$finalArray[$i-1]."'"; ?>
    
    <!-- div id and 2nd argument of openCity must be same -->
    
    <?php $fetchedQuestion = mysqli_query($conn, $sqlQuestion)?>

	<div id="question<?php echo $i; ?>" class="tabcontent">
	
	<?php while($row = mysqli_fetch_assoc($fetchedQuestion)) {?>
	
	   <div class="panel panel-info">
		  <div class="panel-heading">[<?php echo "CO ".$row["co"]; ?>] [<?php echo "Marks = ".$row["m"]; ?>] [<?php echo "Unit = ".$row["unit"]; ?>]</div>

		  <div class="panel-body"> <font size="5"><?php echo "Q $i. ".$row["question"]; ?></font>
        <?php if($row['picsource']!="")  {?>
          <br>
          <img src="<?php echo  $row['picsource']; ?>"/>	<br>
      <?php } ?>  
	  
		  <input type="hidden" name ="sr_no<?php echo $i;?>" value="<?php echo $row["sr_no"]; ?>"/><br>
    	  <input type="hidden" name ="coOfQuestionNo<?php echo $i;?>" value="<?php echo $row["co"]; ?>"/><br>
		  <input type="hidden" name ="unitOfQuestionNo<?php echo $i;?>" value="<?php echo $row["unit"]; ?>"/><br>
		  
	  <h4>A)&nbsp;&nbsp;&nbsp;<input type="radio" name="question<?php echo $i;?>SelectedOption" value="A" onclick="setColor('defaultOpen<?php echo $i; ?>', 'green')"> <?php echo $row["option1"]; ?> <br>
		  B)&nbsp;&nbsp;&nbsp;<input type="radio" name="question<?php echo $i;?>SelectedOption" value="B" onclick="setColor('defaultOpen<?php echo $i; ?>', 'green')"> <?php echo $row["option2"]; ?> <br>
    	  C)&nbsp;&nbsp;&nbsp;<input type="radio" name="question<?php echo $i;?>SelectedOption" value="C" onclick="setColor('defaultOpen<?php echo $i; ?>', 'green')"> <?php echo $row["option3"]; ?> <br>
		  D)&nbsp;&nbsp;&nbsp;<input type="radio" name="question<?php echo $i;?>SelectedOption" value="D" onclick="setColor('defaultOpen<?php echo $i; ?>', 'green')"> <?php echo $row["option4"]; ?> 
    	  </h4><br><br>
		  <input type="button" value = "Invalid" class="w3-deep-orange w3-button w3-round-xxlarge" onclick="setColor('defaultOpen<?php echo $i; ?>', '#ff5722')";/>
		  <input type="button" value = "Bookmark" class="w3-blue w3-button w3-round-xxlarge" onclick="setColor('defaultOpen<?php echo $i; ?>', '#2196F3')";/>
		  </div>
	   </div>
	</div>
<?php } ?><!-- while loop -->

<?php } ?><!-- for loop -->

<button id="submit-form" type="submit" name="formSubmitted" hidden="hidden" onclick="JSalert()">Confirm Answers</button>

</form>
<?php mysqli_close($conn);?>
<script>
function openCity(evt, cityName) {

  var i, tabcontent, tablinks;
  
  tabcontent = document.getElementsByClassName("tabcontent");
  
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  
  tablinks = document.getElementsByClassName("tablinks");
  
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  
  document.getElementById(cityName).style.display = "block";
  
  evt.currentTarget.className += " active";
  
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen1").click();
</script>

<script>
      $(document).ready(function() {
        function disablePrev() { window.history.forward() }
        window.onload = disablePrev();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
      });
</script>

<script>
$('button').on("click",function(){  
  //$('button').not(this).removeClass();
  $(this).toggleClass('active');
  
  });

.active{background-color:red;}
</script>

<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
   
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog style="height:300px; width:30px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Scientific Calulator</h4>
                </div>
                <div class="modal-body">
                            
<!--BEGIN OF SCIENTIFIC CALCULATOR CODE-->
<script>
/*****************************************
(C) https://www.calculator.net all right reserved.
*****************************************/
function gObj(obj) {var theObj;if(document.all){if(typeof obj=="string"){return document.all(obj);}else{return obj.style;}}if(document.getElementById){if(typeof obj=="string"){return document.getElementById(obj);}else{return obj.style;}}return null;}function trimAll(sString){while (sString.substring(0,1) == ' '){sString = sString.substring(1, sString.length);}while (sString.substring(sString.length-1, sString.length) == ' '){sString = sString.substring(0,sString.length-1);} return sString;} function showDebugInfo(){}function r(A){if(A=="10x"||A=="log"||A=="ex"||A=="ln"||A=="sin"||A=="asin"||A=="cos"||A=="acos"||A=="tan"||A=="atan"||A=="e"||A=="pi"||A=="n!"||A=="x2"||A=="1/x"||A=="swap"||A=="x3"||A=="3x"||A=="RND"||A=="M-"||A=="qc"||A=="MC"||A=="MR"||A=="MS"||A=="M+"||A=="sqrt"||A=="pc"){func(A)}else{if(A==1||A==2||A==3||A==4||A==5||A==6||A==7||A==8||A==9||A==0){numInput(A)}else{if(A=="pow"||A=="apow"||A=="+"||A=="-"||A=="*"||A=="/"){opt(A)}else{if(A=="("){popen()}else{if(A==")"){pclose()}else{if(A=="EXP"){exp()}else{if(A=="."){if(entered){value=0;digits=1}entered=false;if((decimal==0)&&(value==0)&&(digits==0)){digits=1}if(decimal==0){decimal=1}refresh()}else{if(A=="+/-"){if(exponent){Hj=-Hj}else{value=-value}refresh()}else{if(A=="C"){level=0;exponent=false;value=0;enter();refresh()}else{if(A=="="){enter();while(level>0){evalx()}refresh()}}}}}}}}}}}var totalDigits=12;var pareSize=12;var degreeRadians="degree";var value=0;var memory=0;var level=0;var entered=true;var decimal=0;var fixed=0;var exponent=false;var digits=0;var showValue="0";var isShowValue=true;function stackItem(){this.value=0;this.op=""}function array(A){this[0]=0;for(i=0;i<A;++i){this[i]=0;this[i]=new stackItem()}this.gG=A}uI=new array(pareSize);function push(B,C,A){if(level==pareSize){return false}for(i=level;i>0;--i){uI[i].value=uI[i-1].value;uI[i].op=uI[i-1].op;uI[i].vg=uI[i-1].vg}uI[0].value=B;uI[0].op=C;uI[0].vg=A;++level;return true}function pop(){if(level==0){return false}for(i=0;i<level;++i){uI[i].value=uI[i+1].value;uI[i].op=uI[i+1].op;uI[i].vg=uI[i+1].vg}--level;return true}function format(I){if(typeof (cc)!="undefined"){return };var E=""+I;if(E.indexOf("N")>=0||(I==2*I&&I==1+I)){return"Error "}var G=E.indexOf("e");if(G>=0){var A=E.substring(G+1,E.length);if(G>11){G=11}E=E.substring(0,G);if(E.indexOf(".")<0){E+="."}else{j=E.length-1;while(j>=0&&E.charAt(j)=="0"){--j}E=E.substring(0,j+1)}E+=" "+A}else{var J=false;if(I<0){I=-I;J=true}var C=Math.floor(I);var K=I-C;var D=totalDigits-(""+C).length-1;if(!entered&&fixed>0){D=fixed}var F=" 1000000000000000000".substring(1,D+2)+"";if((F=="")||(F==" ")){F=1}else{F=parseInt(F)}var B=Math.floor(K*F+0.5);C=Math.floor(Math.floor(I*F+0.5)/F);if(J){E="-"+C}else{E=""+C}var H="00000000000000"+B;H=H.substring(H.length-D,H.length);G=H.length-1;if(entered||fixed==0){while(G>=0&&H.charAt(G)=="0"){--G}H=H.substring(0,G+1)}if(G>=0){E+="."+H}}return E}function refresh(){var A=format(value);if(exponent){if(Hj<0){A+=" "+Hj}else{A+=" +"+Hj}}if(A.indexOf(".")<0&&A!="Error "){if(entered||decimal>0){A+="."}else{A+=" "}}if(""==(""+A)){document.getElementById("sciOutPut").innerHTML=" "}else{document.getElementById("sciOutPut").innerHTML=A}}function evalx(){if(level==0){return false}op=uI[0].op;Qk=uI[0].value;if(op=="+"){value=parseFloat(Qk)+value}else{if(op=="-"){value=Qk-value}else{if(op=="*"){value=Qk*value}else{if(op=="/"){value=Qk/value}else{if(op=="pow"){value=Math.pow(Qk,value)}else{if(op=="apow"){value=Math.pow(Qk,1/value)}}}}}}pop();if(op=="("){return false}return true}function popen(){enter();if(!push(0,"(",0)){value="NAN"}refresh()}function pclose(){enter();while(evalx()){}refresh()}function opt(A){enter();if(A=="+"||A=="-"){vg=1}else{if(A=="*"||A=="/"){vg=2}else{if(A=="pow"||A=="apow"){vg=3}}}if(level>0&&vg<=uI[0].vg){evalx()}if(!push(value,A,vg)){value="NAN"}refresh()}function enter(){if(exponent){value=value*Math.exp(Hj*Math.LN10)}entered=true;exponent=false;decimal=0;fixed=0}function numInput(A){if(entered){value=0;digits=0;entered=false}if(A==0&&digits==0){refresh();return }if(exponent){if(Hj<0){A=-A}if(digits<3){Hj=Hj*10+A;++digits;refresh()}return }if(value<0){A=-A}if(digits<totalDigits-1){++digits;if(decimal>0){decimal=decimal*10;value=value+(A/decimal);++fixed}else{value=value*10+A}}refresh()}function exp(){if(entered||exponent){return }exponent=true;Hj=0;digits=0;decimal=0;refresh()}function func(D){enter();if(D=="1/x"){value=1/value}if(D=="pc"){value=value/100}if(D=="qc"){value=value/1000}else{if(D=="swap"){var B=value;value=uI[0].value;uI[0].value=B}else{if(D=="n!"){if(value<0||value>200||value!=Math.round(value)){value="NAN"}else{var E=1;var A;for(A=1;A<=value;++A){E*=A}value=E}}else{if(D=="MR"){value=memory}else{if(D=="M+"){memory+=value}else{if(D=="MS"){memory=value}else{if(D=="MC"){memory=0}else{if(D=="M-"){memory-=value}else{if(D=="asin"){if(degreeRadians=="degree"){value=Math.asin(value)*180/Math.PI}else{value=Math.asin(value)}}else{if(D=="acos"){if(degreeRadians=="degree"){value=Math.acos(value)*180/Math.PI}else{value=Math.acos(value)}}else{if(D=="atan"){if(degreeRadians=="degree"){value=Math.atan(value)*180/Math.PI}else{value=Math.atan(value)}}else{if(D=="e^x"){value=Math.exp(value*Math.LN10)}else{if(D=="2^x"){value=Math.exp(value*Math.LN2)}else{if(D=="e^x"){value=Math.exp(value)}else{if(D=="x^2"){value=value*value}else{if(D=="e"){value=Math.E}else{if(D=="ex"){value=Math.pow(Math.E,value)}else{if(D=="10x"){value=Math.pow(10,value)}else{if(D=="x3"){value=value*value*value}else{if(D=="3x"){value=Math.pow(value,1/3)}else{if(D=="x2"){value=value*value}else{if(D=="sin"){if(degreeRadians=="degree"){value=Math.sin(value/180*Math.PI)}else{value=Math.sin(value)}}else{if(D=="cos"){if(degreeRadians=="degree"){var C=(value%360);if(C<0){C=C+360}if(C==90){value=0}else{if(C==270){value=0}else{value=Math.cos(value/180*Math.PI)}}}else{var C=(value*180/Math.PI)%360;if(C<0){C=C+360}if((Math.abs(C-90)<1e-10)||(Math.abs(C-270)<1e-10)){value=0}else{value=Math.cos(value)}}}else{if(D=="tan"){if(degreeRadians=="degree"){value=Math.tan(value/180*Math.PI)}else{value=Math.tan(value)}}else{if(D=="log"){value=Math.log(value)/Math.LN10}else{if(D=="log2"){value=Math.log(value)/Math.LN2}else{if(D=="ln"){value=Math.log(value)}else{if(D=="sqrt"){value=Math.sqrt(value)}else{if(D=="pi"){value=Math.PI}else{if(D=="RND"){value=Math.random()}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}refresh()};
</script>
<style>
#sciout{padding:5px;border-top:1px solid #262626;border-left:1px solid #262626;border-right:2px outset #262626;border-bottom:2px outset #262626;background: #eeeeee;font-family:arial,helvetica,sans-serif;}#sciOutPut{font-size:18px;padding:3px;margin:2px;cursor:text;text-align:right;background-color:#B8C6A3;border:1px solid #87996b;border-radius: 3px;color:#000;}.scifunc{display: inline-block;display: table-cell;vertical-align: middle;text-align:center;width:50px;height:25px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#185290;background-color:#C8D8E8;}.scifunc:active {background-color:#013f7d;color:#ffffff;}.scinm{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#FFF;background-color:#262626;}.scinm:active {background-color:#aaaaaa;color:#000000;}.sciop{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#262626;background-color:#ccc;}.sciop:active {background-color:#000000;color:#ffffff;}.scird{display: inline-block;display: table-cell;vertical-align: middle;text-align:center;height:30px;margin:1px;border:1px solid #eeeeee;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:13px;color:#262626;}.scieq{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#F00;background-color:#DCADB0;}.scieq:active {background-color:#ff0000;color:#ffffff;}#calfootnote {font-family:arial,helvetica,sans-serif;font-size:12px;text-align:right;}
</style>
<table><tr><td id="sciout"><div><div id="sciOutPut">0</div></div><div style="padding-top:3px;width:100%"><div><span onclick="r('sin')" class="scifunc">sin</span><span onclick="r('cos')" class="scifunc">cos</span><span onclick="r('tan')" class="scifunc">tan</span><span class="scird"><label for="scirdsettingd"><input id="scirdsettingd" type="radio" name="scirdsetting" value="deg" onClick="degreeRadians='degree';" checked>Deg</label><label for="scirdsettingr"><input id="scirdsettingr" type="radio" name="scirdsetting" value="rad" onClick="degreeRadians='radians';">Rad</label></span></div><div><span onclick="r('asin')" class="scifunc">sin<sup>-1</sup></span><span onclick="r('acos')" class="scifunc">cos<sup>-1</sup></span><span onclick="r('atan')" class="scifunc">tan<sup>-1</sup></span><span onclick="r('pi')" class="scifunc">&#960;</span><span onclick="r('e')" class="scifunc">e</span></div><div><span onclick="r('pow')" class="scifunc">x<sup>y</sup></span><span onclick="r('x3')" class="scifunc">x<sup>3</sup></span><span onclick="r('x2')" class="scifunc">x<sup>2</sup></span><span onclick="r('ex')" class="scifunc">e<sup>x</sup></span><span onclick="r('10x')" class="scifunc">10<sup>x</sup></span></div><div><span onclick="r('apow')" class="scifunc"><sup>y</sup>&#8730;x</span><span onclick="r('3x')" class="scifunc"><sup>3</sup>&#8730;x</span><span onclick="r('sqrt')" class="scifunc">&#8730;x</span><span onclick="r('ln')" class="scifunc">ln</span><span onclick="r('log')" class="scifunc">log</span></div><div><span onclick="r('(')" class="scifunc">(</span><span onclick="r(')')" class="scifunc">)</span><span onclick="r('1/x')" class="scifunc">1/x</span><span onclick="r('pc')" class="scifunc">%</span><span onclick="r('n!')" class="scifunc">n!</span></div></div><div style="padding-top:3px;"><div><span onclick="r(7)" class="scinm">7</span><span onclick="r(8)" class="scinm">8</span><span onclick="r(9)" class="scinm">9</span><span onclick="r('+')" class="sciop">+</span><span onclick="r('MS')" class="sciop">MS</span></div><div><span onclick="r(4)" class="scinm">4</span><span onclick="r(5)" class="scinm">5</span><span onclick="r(6)" class="scinm">6</span><span onclick="r('-')" class="sciop">&ndash;</span><span onclick="r('M+')" class="sciop">M+</span></div><div><span onclick="r(1)" class="scinm">1</span><span onclick="r(2)" class="scinm">2</span><span onclick="r(3)" class="scinm">3</span><span onclick="r('*')" class="sciop">&#215;</span><span onclick="r('M-')" class="sciop">M-</span></div><div><span onclick="r(0)" class="scinm">0</span><span onclick="r('.')" class="scinm">.</span><span onclick="r('EXP')" class="sciop">EXP</span><span onclick="r('/')" class="sciop">&#247;</span><span onclick="r('MR')" class="sciop">MR</span></div><div><span onclick="r('+/-')" class="sciop">&#177;</span><span onclick="r('RND')" class="sciop">RND</span><span onclick="r('C')" class="scieq">C</span><span onclick="r('=')" class="scieq">=</span><span onclick="r('MC')" class="sciop">MC</span></div></div></td></tr></table>
<!--END OF SCIENTIFIC CALCULATOR CODE-->      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
            </div>
        </div>
    </div> 


</body>
</html>

<?php }
else{
    echo "<h1>Access Forbidden</h1>";

}?>