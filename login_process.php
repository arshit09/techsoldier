<?php 
$msg="";
$dbflag=0;
$flag=0;
try{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$conn = new mysqli('localhost','root','','techsoldier');
	//echo "Connection is established...<br/>";
	//$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="select username from user_info where username='$username' and password='$password'";
	$result=$conn->query($sql);
	$msg=$result;
	$dbflag=1;
	//echo $msg;
}
catch(PDOException $e){
	$dbflag=2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | TechSoldier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<?php
					if($dbflag==2){ echo "Database connection issue";}
					else{
						if ($result->num_rows > 0) {
							$flag=1;
							$msg="you are valid";
							?>
							<form action="main.php" class="login100-form validate-form" method="POST">
							<span class="login100-form-title p-b-43">
								<?php echo $msg;?>
							</span>
							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
									Let's Go
								</button>
							</div>
							</form>
							<?php
						}
						else {
							$flag=2;
							$msg="you are invalid";
							?>
							<form action="login.php" class="login100-form validate-form" method="POST">
							<span class="login100-form-title p-b-43">
								<?php echo $msg;?>
							</span>
							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
									Try Again
								</button>
							</div>
							</form>
							<?php
						}
					}
				?>


			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

