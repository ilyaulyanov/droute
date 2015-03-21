<?php
session_start();
require("connect.php");
	$email =$_POST["email"];
	$pass =$_POST["pass"];
	$arr['email']=$email;
	$arr['pass']=$pass;

	$query="SELECT * FROM user WHERE email='".$email."' AND password=".$pass;
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);

	$id = $row['id'];
	$name = $row['name'];

	if($result){
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$jsonData = json_encode($arr);
		echo $jsonData;
	}
	
?>