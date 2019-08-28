<?php
try{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$dbhandler = new PDO('mysql:host=localhost;dbname=techsoldier','arshit','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into user_info (username,password,email,contact_no,address) values ('$username','$password','$email','$contact','$address')";
	$query=$dbhandler->query($sql);
	echo $sql;
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>