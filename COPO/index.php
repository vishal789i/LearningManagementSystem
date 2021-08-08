<?php session_start();?>
<?php if(isset($_SESSION['startedOfAdmin'])){?>
<html>
 <head>
 
		

  <title>CO mapping</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="w3.css">
  <style>
  div.container {
        width: 80%;
    }
   .dataTables_filter {
		display: none;
   }
  body
  {
   margin:0;
   padding:0;
   background-color:#bfdbfb;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:20px;
   margin-top:25px;
   box-sizing:border-box;
   padding: 20px;
  box-shadow: 
       inset 0 -3em 3em rgba(0,0,0,0.1), 
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
  }
  td {
  border: 1px solid black;
  width: 10px;
  max-width: 100px;
  white-space: pre-wrap;        /* css */
  white-space: -moz-pre-wrap;   /* Mozilla */
  white-space: -pre-wrap;       /* Chrome*/
  white-space: -o-pre-wrap;     /* Opera 7 */
  word-wrap: break-word; /* Internet Explorer 5.5+ */
}

  </style>
 </head>
 <body>
<!-- NAVIGATION -->
  <div class="w3-top">
    <div class="w3-bar w3-deep-purple">
      <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL
        <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selected Subject : ".$_SESSION['SubjectGV']." ";?></span>
      <span class="w3-right w3-mobile">
	  

      </span>
    </div>
  </div><br><br>

  <div class="container box">
   <b><h2 align="center">Course Outcome Mapping</h2></b>
   <br>
<center><p><b><a href="QuestionAvailability.php" target="_blank" ><button class="btn btn-info">Check availability of questions here</button></a></b></p>
   <br />
    
    <center><a href="newCO.php">
   <input type="button" value="Check" class="btn btn-success" />
   </a>
	<a href="viewQuestions.php">
   <input type="button" value="View Question Bank" class="btn btn-danger" />
   </a></center>

   <div class="table-responsive">
   <br />
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
	 <tr >
       <th></th>
       <th></th>
	   <th><i><center>UNIT</center></i></th>
	   	<th><center>Unit-1</center></th><th><center>Unit-1</center></th>
<th><center>Unit-2</center></th><th><center>Unit-2</center></th>
<th><center>Unit-3</center></th><th><center>Unit-3</center></th>
<th><center>Unit-4</center></th><th><center>Unit-4</center></th>
<th><center>Unit-5</center></th><th><center>Unit-5</center></th>
<th><center>Unit-6</center></th><th><center>Unit-6</center></th>	   

      </tr>	
	  <!--
	     <tr>
       <th></th>
       <th><center>Weight</center></th>
	   <th><center>?</center></th><th><center></center></th><th><center></center></th>
<th><center></center></th><th><center></center></th>
<th><center></center></th><th><center></center></th>
<th><center></center></th><th><center></center></th>
<th><center></center></th><th><center></center></th>
<th><center></center></th><th><center></center></th>	   
      
      </tr>
		-->
	  <tr>
       <th><center><i>CO</i></center></th>
       <th><center>Weight</center></th>
	   <th><center><i>CO Marks</i></center></th> <th><center>1M</center></th><th><center>2M</center></th>
<th><center>1M</center></th><th><center>2M</center></th>
<th><center>1M</center></th><th><center>2M</center></th>
<th><center>1M</center></th><th><center>2M</center></th>
<th><center>1M</center></th><th><center>2M</center></th>
<th><center>1M</center></th><th><center>2M</center></th>

      </tr>
	  </thead>
	  
       </table>
   </div>
  </div>
<br><br>
 </body>

</html>

<script type="text/javascript" language="javascript" >


$(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
	"bPaginate": false,
	"lengthMenu": [[-1,3, 5, 7], ["All", 3, 5, 7]],
	
	"order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
	
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     //$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }
  
  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td contenteditable id="data7"></td>';
   html += '<td contenteditable id="data8"></td>';
   html += '<td contenteditable id="data9"></td>';
   html += '<td contenteditable id="data10"></td>';
   html += '<td contenteditable id="data11"></td>';
   html += '<td contenteditable id="data12"></td>';
   html += '<td contenteditable id="data13"></td>';
   html += '<td contenteditable id="data14"></td>';
   html += '<td contenteditable id="data15"></td>';
   
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var co = $('#data1').text();
   var weight = $('#data2').text();
   var coMarks = $('#data3').text();
   var unit1_1 = $('#data4').text();
   var unit1_2 = $('#data5').text();
   var unit2_1 = $('#data6').text();
   var unit2_2 = $('#data7').text();
   var unit3_1 = $('#data8').text();
   var unit3_2 = $('#data9').text();
   var unit4_1 = $('#data10').text();
   var unit4_2 = $('#data11').text();
   var unit5_1 = $('#data12').text();
   var unit5_2 = $('#data13').text();
   var unit6_1 = $('#data14').text();
   var unit6_2 = $('#data15').text();
   
   if(true/*co != '' && weight != ''&& coMarks != ''&& unit1_1 != ''*/)
   {     
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{co:co, weight:weight, coMarks:coMarks, unit1_1:unit1_1, unit1_2:unit1_2, unit2_1:unit2_1, unit2_2:unit2_2, unit3_1:unit3_1, unit3_2:unit3_2, unit4_1:unit4_1, unit4_2:unit4_2, unit5_1:unit5_1, unit5_2:unit5_2, unit6_1:unit1, unit6_2:unit6_2},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>

<?php }
else{
    echo "<h1>Access Forbidden</h1>";
}?>