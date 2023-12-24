<!DOCTYPE html>
<html lang="en">
<head>
<title>student login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>
<div class="header">
  <h1>ADVANCE DIPLOMA IN IT,
  NETWORKING & CLOUD COMPUTING</h1>
  <h2>ADIT STUDENTS RESULT PORTAL</h2>
</div>
<div class="head">
<h2>ADD RESULT</h2>
</div>
<div class="form">
<form action="student.php" method="post">
  <div class="container">
  

    <label for="roll_no"><b> roll_no</b></label> <span class="required">*</span>
    <input type="tel"  name="roll_no" required>
  <label for="name"><b> name</b></label> <span class="required">*</span>
    <input type="text"  name="name" required>

 
        <label for="marks"><b> marks</b></label> <span class="required">*</span>
    <input type="text"  name="marks" required>
<label for="module"><b> module</b></label> <span class="required">*</span>
    <input type="text"  name="module" required>

 
    <button type="submit" style="cursor:pointer">Add Result</button>
    
  </div>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST["submit"])){
  
  $roll_no = $_POST['roll_no'];
  
  $name = $_POST['name'];
  $marks = $_POST['marks'];
  $module = $_POST['module'];
  $servername ="localhost";
  $username ="root";
  $db_name ="adit";
  $conn = mysqli_connect($Servername,$username,$db_name);
  mysqli_select_db($connect,$db_name);
  $query ="INSERT INTO student(roll_no,name,marks,module)value('$roll_no','$name','$marks','$module')";
  if(mysqli_query($connect,$sql))
  {
  //  echo"new record successfully";
    header("location:../onlineportal/student.php");
  }
  else {
    echo "error".$sql."<br>".mysqli_error($connect);
}}

?>