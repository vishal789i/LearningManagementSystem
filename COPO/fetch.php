<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "online_exam");
$columns = array('co', 'weight', 'coMarks', 'unit1_1', 'unit1_2', 'unit2_1', 'unit2_2', 'unit3_1', 'unit3_2', 'unit4_1', 'unit4_2', 'unit5_1', 'unit5_2', 'unit6_1', 'unit6_2');

$query = "SELECT * FROM user ";

if(isset($_POST["search"]["value"]))
{
 /*$query = $query . '
 WHERE first_name LIKE "%'.$_POST["search"]["value"].'%" OR last_name LIKE "%'.$_POST["search"]["value"].'%" OR roll_no LIKE "%'.$_POST["search"]["value"].'%" ';*/
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="co">' . $row["co"] . '</div><center>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="weight">' . $row["weight"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="coMarks">' . $row["coMarks"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit1_1">' . $row["unit1_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit1_2">' . $row["unit1_2"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit2_1">' . $row["unit2_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit2_2">' . $row["unit2_2"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit3_1">' . $row["unit3_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit3_2">' . $row["unit3_2"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit4_1">' . $row["unit4_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit4_2">' . $row["unit4_2"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit5_1">' . $row["unit5_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit5_2">' . $row["unit5_2"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit6_1">' . $row["unit6_1"] . '</div>';
 $sub_array[] = '<center><div contenteditable class="update" data-id="'.$row["id"].'" data-column="unit6_2">' . $row["unit6_2"] . '</div>';
 
 
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM user";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
