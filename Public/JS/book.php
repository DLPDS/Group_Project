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
<<<<<<< HEAD
    echo "<td  >" ."<input class=form-control type=number placeholder=".$row['Author'] ."></td>";
    echo "<td >" ."<input class=form-control type=number placeholder=".$row['Genre'] ."></td>";
    echo "<td > "."<input class=form-control type=number placeholder=". $row['Price'] ."></td>";
	echo "<td>" ."<input class=form-control type=number>". "</td>";
	echo "<td>
						<button type=button>Edit</button>
						<button type=button>Delete</button>
=======
    echo "<td  >" ."<input class=form-control type=number placeholder=". $row['Price'] ."></td>";
    echo "<td >" ."<input class=form-control type=number placeholder=1></td>";
    echo "<td > "."<input class=form-control type=number placeholder=0%></td>";
	echo "<td>
						<button type=button>Edit</button>
						<button type=button onclick=deleteRow(this)>Delete</button>
>>>>>>> 9d9940677c6f83a2090be86b6a42697f8e938c96
					</td>";
    echo "</tr>";

}
echo "</table>";

mysqli_close($con);
?>