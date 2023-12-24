<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}
th{
	    padding: 12px !important;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  height: 50px;
  vertical-align: bottom;
}td {
	text-align:center;
	height: 0px !important;
    padding: 13px !important;
  height: 50px;
  vertical-align: bottom;
}

</style>
</head>
</html>
<?php
include 'db.php';
if(isset ($_GET['id']))
{
	$id =$_GET ['id'];
    $sql = "Delete FROM student where C_id=$id";
    $result = mysqli_query($connect,$sql);
}
?>
<?php
$sql = "SELECT * FROM student";
$result = mysqli_query($connect,$sql);

echo "<div class='container'><table>";
if(mysqli_num_rows($result)> 0)
{
	echo "<tr><th>roll_no</th>
	<th>name</th>
	<th>marks</th>
	<th>module</th>
	<th colspan='2'>Action</th></tr>";
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		
		echo "<td>".$row["roll_no"]."</td>";
		echo "<td>".$row["name"]."</td>";
		
		echo "<td>".$row["marks"]."</td>";
		echo "<td>".$row["module"]."</td>";
		
	
	
		echo "<td><a href ='../onlineportal/editcourse.php?id=id' class='btn btn-default' style='background-color: cornflowerblue;color: white;'>Edit</a></td>";
		echo "<td><a href ='../onlineportal/student.php?id=id' class='btn btn-default' style='background-color: brown;color: white;'>Delete</a></tr></td>";
	}
	
 
}
 else {
	echo "0 result";
}
echo "</table></div>";
?>