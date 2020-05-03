<?php
session_start();
$conn=mysqli_connect("localhost","root","sanu1234","userdb");
if(mysqli_connect_errno()){
	header("Location: /upload_website/login?error=".mysqli_connect_error());
	exit;
}
?>