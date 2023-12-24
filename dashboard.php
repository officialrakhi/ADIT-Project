<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	//echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'admin');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admintable where user='$username' and pass='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:adminlogin.php');
		}else{
			echo "login failed";
			header('location:adminlogin.php');
		}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-right">
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-10 col-11 mx-auto">
			<nav aria-label="breadcrumb" class="mb-3 bg-common">
				<ol class="breadcrumb">
					<h2>Dashboard<h2>
				</ol>
			</nav>
			<div class="row">
			<!--right side navbar-->
					<div class="col-lg-3 col-md-4 d-md-block">
						<div class="card bg-common card-left">
						<div class="card-body">
						<ul class="nav flex-column">
						
  <li class="nav-item">
    <a data-toggle="tab" class="nav-link active" href="#profile">Profile</a>
  </li>
  
  <li class="nav-item">
    <a data-toggle="tab"  class="nav-link" href="#Trades">Modules</a>
  </li>
  
    
  <li class="nav-item">
    <a class="nav-link" href="add_result.php">Add Result</a>
  </li>
   
  <li class="nav-item">
    <a class="nav-link" href="admin.php">Log out</a>
  </li>
</ul>
							</div>
					</div>
			</div>
				<!--right side div starts-->
			<div class="col-lg-8 col-md-12">
						<div class="card">
							<div class="card-header border-bottom mb-3">
							<ul class="nav">
 
							</div>
							<!--user profile starts-->
							<div class="card-body tab-content border-0">
							<!--actual profile starts-->
							<div class="tab-pane active" id="profile">
							<h3>Profile info</h3>
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">User Name</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="admin">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
							<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="1234">
							</div>
								</form>
							</div>
							<!--actual profile starts-->
							<div class="tab-pane block" id="Trades">
							<h5>1. Core Module 1 (Computer Hardware Maintenance)</h5>
								<h5>2. Core Module 2 (Computer Networking) </h5>
									<h5>3. Core Module 3 (Web Designing)</h5>
										<h5>4. Core Module 4 (Web Development)</h5>
											<h5>5. Core Module 5 (Business Data Analytics)</h5>
												<h5>6. Elective Modules </h5>
											<h6>I. Cloud Application Developer</h6>
											<h6>II. Cloud Enterprise Developer</h6>
											<h6>III. Web Development using Java</h6>
										
										<h5>7. Employability Skills </h5>
							</div>
							
							<!--actual profile starts-->
							<div class="tab-pane block" id="Update_Result">
							<h3> this is the result tab</h3>
							</div>
							
							</div>
						</div>
					</div>	
			</div>
		</div>
	</div>
   <!--Optinal Javascript-->
   <!--Propper.js first, then Bootstrap JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>