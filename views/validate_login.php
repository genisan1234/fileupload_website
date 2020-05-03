<?php include 'database_connect.php'; ?>
<?php
$_SESSION['login_source']='true';
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * from upload_users where username = '$username' and password = '$password'";
$res=mysqli_query($conn,$query);
if(!$res)
{
	mysqli_close($conn);
	header("Location: /upload_website/login?error=".mysqli_error($conn));
	exit;
}
else{
	$rows = mysqli_num_rows($res);
	if($rows==1){
		mysqli_close($conn);
		$_SESSION['username']=$username;
		header("Location: /upload_website/users?username=".$username);
	}
	else{
		mysqli_close($conn);
	    header("Location: /upload_website/login?error=Username%20or%20password%20is%20incorrect");
	    exit;
	}
}
?>