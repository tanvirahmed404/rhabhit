<?php 
session_start();
require_once("../../config/connect.php");
if (isset($_REQUEST["loginBtn"])) {
	
$username=mysqli_real_escape_string($con,$_REQUEST["username"]);
$password=mysqli_real_escape_string($con,$_REQUEST["password"]);

$showData="SELECT * FROM users WHERE username='$username' AND user_pwd='$password'";
$runShowQuery=mysqli_query($con,$showData);

if ($runShowQuery == true) {
	if (mysqli_num_rows($runShowQuery)>0) {
		while ($data=mysqli_fetch_array($runShowQuery)) {
			$id=$data["user_id"];
			$fname=$data["fname"];
			$lname=$data["lname"];
		}
		$_SESSION["auth"]=true;
		$_SESSION["auth_user"]=[
			"user_id" => $id,
			"user_name" => $fname.' '.$lname,

		];
		$_SESSION["message"] = "Welcome ".$fname.' '.$lname;
		header("location: ../index.php");
		exit(0);
	}
	else{
		$_SESSION["message"] = "Wrong Username or Password!";
		header("location: ../login.php");
		exit(0);
	}
	
}


}

?>