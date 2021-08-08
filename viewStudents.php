<?php session_start();?>
<?php if (isset($_SESSION['superAdmin'])) {?>

<!DOCTYPE html>
<html>

<head>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #666666;
      color: white;
    }
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/w3.css">
</head>

<body>
  <!-- NAVIGATION -->
  <div class="w3-top">
    <div class="w3-bar w3-deep-purple">
      <span class="branding w3-bar-item w3-mobile">PICT EXAMINATION PORTAL </span>
      <span class="w3-right w3-mobile">
      </span>
    </div>
  </div><br><br>


  <center>
    <h3 class="w3-red"><b>Question Bank</h3>
    <center>
      <!search for table>
        <i>Type something in the input field to search the table for any field:</i> <br>
        <input style="width:200px; class=" form-control" id="customers" type="text" placeholder="               Search..">
        <br><br>
        <script>
          $(document).ready(function() {
            $("#customers").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
        <!search for table end here>
<?php
include_once 'DBConnection.php';
$subjectNameOnViewQuestion = $_SESSION['SubjectGV'];

$sql = "SELECT * FROM studentlogins" ;
$result = mysqli_query($conn, $sql);
?>
          <?php
  $i= 0;
if (mysqli_num_rows($result) > 0) {?>
          <table id="customers">
            <tr>
              <th>
                <h4>
                  <center>Id</center>
                </h4>
              </th>
              <th>
                <h4>
                  <center>Name
              </th>
              </h4>
    </center>
    <th>
      <h4>
        <center>Username
    </th>
    </h4>
  </center>
  <th>
    <h4>
      <center>Password
  </th>
  </h4>
  </center>
  </tr>
  <?php
  /*$i= 0;
if (mysqli_num_rows($result) > 0) {*/
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {?>
  <tbody id="myTable">
    <tr>
      <td>
        <center><?php echo $row['id'];?>
      </td>
      </center>
      <td>
        <center><?php echo $row['name'];?>
      </td>
      </center>
      <td>
        <center><?php echo $row['username'];?>
      </td>
      </center>
      <td>
        <center><?php echo $row['password'];?>
      </td>
      </center>
    </tr>

    <?php } ?>
  </tbody>
  </table>
  <br><br><br><br>
  <?php
} else {
        echo "No result found ";
    }
    mysqli_close($conn);
//echo "Total number of questions you have uploaded are ".$i;
?>

  <script>
    function myFunction() {
      window.print();
    }
  </script>
</body>

</html>

<?php } else {
    echo "<h1>cannot access this page directly</h1>";
}?>
