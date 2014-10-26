<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','mydb');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mydb");
$sql="SELECT * FROM book WHERE ISBN = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
	
    echo "<tr >";
    echo "<td >" ."<input class=form-control type=text value=".$row['ISBN']  ." disabled></td>";
    echo "<td >" ."<input class=form-control type=text value=".$row['Name'] ." disabled></td>";
    echo "<td >"."<input class=form-control type=text value=" .$row['Author'] ." disabled></td>";
    echo "<td >"."<input class=form-control type=number value=". $row['Price'] ." ></td>";
	echo "<td >"."<input class=form-control type=number value=1 onkeyup=prize2(this); onchange=prize2(this);></td>";
	echo "<td >"."<input class=form-control type=number value=". $row['Price'] ." ></td>";
	echo "<td >
						<button type=button onclick=myDeleteFunction(this);>Delete</button>
					</td>";
    echo "</tr>";

}
echo "</table>";

mysqli_close($con);
?>