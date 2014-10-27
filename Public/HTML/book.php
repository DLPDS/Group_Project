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
    echo "<td >" ."<input class=form-control type=number placeholder=".$row['ISBN']  ."></td>";
    echo "<td >" ."<input class=form-control type=number placeholder=".$row['Name'] ."></td>";
    echo "<td  >" ."<input class=form-control type=number placeholder=". $row['Price'] ."></td>";
    echo "<td >" ."<input class=form-control type=number placeholder=1></td>";
    echo "<td > "."<input class=form-control type=number placeholder=0%></td>";
    echo "<td>
						<button type=button onclick=deleteRow(this)>Delete</button>
					</td>";
    echo "</tr>";

}
echo "</table>";

mysqli_close($con);
?>