<?php
$conn = mysqli_connect('localhost','root','', 'mydb');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset ($_GET['name']) === true && empty($_GET['name']) === false){

  $c=$_GET['name'];
 $query = mysqli_query ($conn, "
	SELECT *
	FROM book
	WHERE ISBN= '5'");
	
	
	$a=array();
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		array_push($a, $row['Name']);
		array_push($a,$row['Author']);
		array_push($a,$row['Genre']);
		array_push($a,$row['Publisher']);
        array_push($a,$row['Price']);
		array_push($a,$row['Quantity']);
        array_push($a,$row['Supplier_Id']);

	
	}

//echo json_encode(array('a_list'=>$a));
if (mysqli_num_rows($query) !==0){
	echo json_encode(array('a_list'=>$a));
}
else{
	echo 'Name not found';
}
	//echo json_encode(mysql_num_rows($query) !==0) ? array('a_list'=>$a) : 'Name not found';
	
	
	}
?>