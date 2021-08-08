<form  action="" method="POST"
           enctype="multipart/form-data">
 
  <input type="file"  name="file" >
  
 <input type= "submit" value ="Upload" >
  
</form>
<?php 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
 
echo "connected";
 
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
 
// Include Spout library 
require_once 'vendor/box/spout-2.4.3/src/Spout/Autoloader/autoload.php';
 
// check file name is not empty
if (!empty($_FILES['file']['name'])) {
      
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["file"]["name"]);
     
    // check file has extension xlsx, xls and also check 
    // file is not empty
   if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
           && $_FILES['file']['size'] > 0 ) {
         
        // Temporary file name
        $inputFileName = $_FILES['file']['tmp_name']; 
    
        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);
 
        // Open file
        $reader->open($inputFileName);
        $count = 1;
 
        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {
             
            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {
 
                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 
                     
					$sr_no = "";
					if(isset($row[0])) {
						$sr_no = mysqli_real_escape_string($conn,$row[0]);
					}

					$question = "";
					if(isset($row[1])) {
						$question = mysqli_real_escape_string($conn,$row[1]);
					}

					$option1 = "";
					if(isset($row[2])) {
						$option1 = mysqli_real_escape_string($conn,$row[2]);
					}

					$option2 = "";
					if(isset($row[3])) {
						$option2 = mysqli_real_escape_string($conn,$row[3]);
					}

					$option3 = "";
					if(isset($row[4])) {
						$option3 = mysqli_real_escape_string($conn,$row[4]);
					}

					$option4 = "";
					if(isset($row[5])) {
						$option4 = mysqli_real_escape_string($conn,$row[5]);
					}

					$f_answer = "";
					if(isset($row[6])) {
						$f_answer = mysqli_real_escape_string($conn,$row[6]);
					}

					$subjectName = "";
					if(isset($row[7])) {
						$subjectName = mysqli_real_escape_string($conn,$row[7]);
					}

					$teacherId = "";
					if(isset($row[8])) {
						$teacherId = mysqli_real_escape_string($conn,$row[8]);
					}

					$CO = "";
					if(isset($row[9])) {
						$CO = mysqli_real_escape_string($conn,$row[9]);
					}

					$M = "";
					if(isset($row[10])) {
						$M = mysqli_real_escape_string($conn,$row[10]);
					}
					
					$query = "INSERT INTO `question_set` (`question`, `option1`, `option2`, `option3`, `option4`, `f_answer`, `subjectName`, `teacherId`, `CO`, `M`) VALUES ('".$question."', '".$option1."', '".$option2."', '".$option3."', '".$option4."', '".$f_answer."', '".$subjectName."', '".$teacherId."', '".$CO."', '".$M."');";
					$result = mysqli_query($conn, $query);

					if (! empty($result)) {
						$type = "success";
						$message = "Excel data imported into the database susccessfully !";
					} else {
						$type = "error";
						$message = "Error:Problem in importing excel data";
					}
                     
                }
                $count++;
            }
        }
 
        // Close excel file
        $reader->close();
 
    } else {
 
        echo "Please Select Valid Excel File";
    }
 
} else {
 
    echo "Please Select Excel File";
     
}
?>