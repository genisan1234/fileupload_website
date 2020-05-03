<?php include 'database_connect.php' ; ?>
<?php
$_SESSION['register_source']="true";
$fname = $_POST['firstname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $_POST["username"]) === 0){
header("Location:/upload_website/register?error=username%20must%20be%20bigger%20that%20five%20chars%20and%20contain%20only%20digits,letters%20and%20underscore");
exit;
}
if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0){
header("Location:/upload_website/register?error=Password%20must%20be%20at%20least%20eight%20characters%20and%20must%20contain%20at%20least%20one%20lower%20case letter,%20one%20uppercase%20letter%20and%20one%20digit");
exit;
}
if($password !== $confirm_password){
	header("Location: /upload_website/register?error=Passwords%20donot%20match");
	exit;
}

$query1 = "SELECT * from upload_users where username = '$username' and password = '$password'";
$res=mysqli_query($conn,$query1);
if(mysqli_num_rows($res)!=0)
{  
	mysqli_close($conn);
	header("Location: /upload_website/register?error=Username%20already%20exists");
	exit;
}
$query2 = "SELECT * from upload_users where email = '$email'";
$res=mysqli_query($conn,$query2);
if(mysqli_num_rows($res)!=0)
{  
	mysqli_close($conn);
	header("Location: /upload_website/register?error=Email%20already%20exists");
	exit;
}
$query = "INSERT INTO upload_users VALUES('$fname','$email','$username','$password');";
if(!mysqli_query($conn,$query))
{
	mysqli_close($conn);
	header("Location: /upload_website/register?error=".mysqli_error($conn));
	exit;
}
else
{

	$dir="user_uploads/".$username;
	mkdir($dir);
	mysqli_query($conn,"INSERT INTO files VALUES('$username','');");
	mysqli_close($conn);
    header("Location: /upload_website/login");
}

?>