<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "adit";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM student";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM student WHERE Name ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>student Result</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
background-image:url(white2.jpg);
  font-family:Bahnschrift;
  word-spacing:4px; 
}
.form{
padding-left:200px;
padding-right:200px;
padding-bottom:100px;
}
form {border: 2px solid black;
padding-left:20px;
padding-right:20px;
font-size:20px;
}
input[type=text], input[type=tel] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: LightSkyBlue;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  font-size:18px;
  border: none;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
.head{
text-align:center;
font-size:20px;
}
.required
{
    color: red;
}
/* Style the header */
.header {
  padding: 2px;
  text-align: center;
  color: MediumBlue;
  background-image:url(logodgt.png), url(orange3.jpg);
  background-size: 230px 130px;
  background-position: left bottom, left top;
  background-repeat: no-repeat, repeat;  
}
/* Style the footer */
.footer {
    display: grid;
    grid-template-columns: 1fr 1fr;
    line-height: 2;
    margin-top: 2px;
	font-size:18px;
	  font-weight: bold;
	  color:MediumBlue;
	  background-image:url(orange3.jpg);
	  background-image:url(logodgt1.png), url(orange3.jpg);
  background-size: 250px 120px;
  background-position: right top, left top;
  background-repeat: no-repeat, repeat;
  height:30%;
  width:100%;
  padding: 2px;
  padding-top:5px;
  text-align: center;
}

</style>
</head>
<body><div class="header">
  <h1>ADVANCE DIPLOMA IN IT, NETWORKING & CLOUD COMPUTING</h1>
  <h2>ADIT STUDENTS RESULT PORTAL</h2>
</div>
<div class="head">
<h2>ADIT Student Check result</h2>
</div>
<div class="container">
<label>Search </label>
<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>ADIT Result List </h2>
<table class="table table-striped table-responsive">
<tr>
<th>Roll_No</th>
<th>Name</th>
<th>Marks</th>
<th>Module</th>

</tr>
<?php
 while($row = mysqli_fetch_assoc($result)){
	
    ?>
    <tr>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['marks']; ?></td>
    <td><?php echo $row['module']; ?></td>
   
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>