<?php
//setting header to json
header('Content-Type: application/json');
session_start();
require_once('connection.php');

//query to get data from the table
$name = $_SESSION['user'];

$query = "SELECT attend1,attend2,attend3,attend4 from student where enroll_no = $name";

//execute query
$result = mysqli_query($con,$query);

//loop through the returned data

$data = array();

foreach ($result as $row) {
	$data[] = $row;		
}


//now print the data
print json_encode($data);

?>