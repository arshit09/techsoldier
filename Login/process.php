<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$link = mysqli_connect("localhost:801","root","");
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($link, $username);
	$password = mysql_real_escape_string($link, $password);
	mysql_select_db("techsoldier");

	$result = mysql_query("select * from user_info where username = '$username' and password = '$password'") or die("Erroe to fire query in db".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Logged in".row['username'];
	} else {
		echo "Failed to login";
	}
?>