<?php include 'database_connect.php' ;?>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
	<style>
	#uname{
		font-family: 'Manrope', sans-serif;
	}

	#contact_breadcrumb{
		position:relative;
		top:400px;
	}
	.copyright{
		position:fixed;
		margin-left:30%;
	}

	
</style>
	<title>Upload</title>
</head>
<body>
		     <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Upload</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/upload_website/">Home</a></li>
            <li><a href="/upload_website/about">About</a></li>
            <li><a href="/upload_website/contact">Contact</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/upload_website/register">New User?</a></li>
            <li><a href="/upload_website/logout">Logout</a></li>
          </ul>
          </div>
    </nav>
<?php
if(isset($_SESSION['username'])){
	$val= $_SESSION['username'];
	if($val!==$_GET['username']){header("Location: /upload_website/users?username=".$val);exit;}
 echo "<div class='container'>"."<h2 class='text-center' id='uname'>Hello ".$_SESSION['username']." <img src='/upload_website/pictures/user.png'></h2><br><br>";
 echo "<div class='text-center'style='color:pink;font-size:0.8em;'> Note: The limit on file size is 10M</div>";
 $val=$_SESSION['username'];
 $res =mysqli_query($conn,"SELECT file from files where username='$val';");
 $row = mysqli_fetch_array($res,MYSQLI_NUM);
 $ans=explode(",",$row[0]);
 echo "<ul class='list-group'>";
 $sz=sizeof($ans);
 for($i=0;$i<$sz-1;$i++){
 	$ans[$i]=str_replace(' ','_',$ans[$i]);
 	$tmp = "<a href="."/upload_website/user_uploads/".$val."/".$ans[$i]." download><img src='/upload_website/pictures/download.png'></a>";
 	echo "<li class='list-group-item' style='color:green;'>".$ans[$i]." ".$tmp."</li>";
 }
 echo "</ol><br><br>";
echo "<form action='/upload_website/upload' method='post' enctype='multipart/form-data'>
    <strong style='color:#b5651d;'>Select file to upload:</strong>
    <input type='file' name='fileToUpload' style='background-color:#f4f4f4;border:1px solid green;' id='fileToUpload'> <br><input type='submit' class='btn btn-primary' value='Upload Image' name='submit'>
</form>";
}
else{
	header("Location: /upload_website/login?error=You%20need%20to%20login%20first");
}
?>
  <div class="row" id="contact_breadcrumb">
  <ol class="breadcrumb">
  <li><a href="/upload_website/">Home</a></li>
  <li><a href="/upload_website/contact">Contact</a></li>
  <li><a href="/upload_website/about">About</a></li>
</ol>
<div class="copyright">&copy;2016 All Rights Reserved</div>
</div>
</div>
  <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
<script src="/upload_website/js/bootstrap.js"></script>

</body>
</html>