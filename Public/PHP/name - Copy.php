<?php

$conn = mysqli_connect('localhost','root','', 'mydb');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset ($_GET['name']) === true && empty($_GET['name']) === false){

  $c=$_GET['name'];
 $query = mysqli_query ($conn, "
	SELECT *
	FROM staff
	WHERE First_Name= '$c'");
	
	
	$a=array();
	while ($row = mysqli_fetch_array($query)){
		array_push($a, $row['Last_Name']);
		array_push($a,$row['Birthday']);
		array_push($a,$row['Username']);
		array_push($a,$row['Password']);
		array_push($a,$row['Position']);
	
	}

//echo json_encode(array('a_list'=>$a));
if (mysqli_num_rows($query) !==0){
	//echo json_encode(array('a_list'=>$a));
	echo 'good';
}
else{
	echo 'Name not found';
}
	//echo json_encode(mysql_num_rows($query) !==0) ? array('a_list'=>$a) : 'Name not found';
	
	
	}
?>