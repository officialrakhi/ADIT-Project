<?php
$servername = "localhost";
$username = "root";
$db_name = "adit";
$connect = mysqli_connect($servername,$username);
mysqli_select_db($connect,$db_name);
if($connect)
{
	echo "successfuly";
}
else 
{
	echo "not successfully";
}

?>

