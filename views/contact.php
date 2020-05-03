<?php session_start() ?>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<style>

	#contact_breadcrumb{
		position:fixed;
		top:90%;
	}
	.copyright{
		position:fixed;
		margin-left:30%;
	}
</style>
	<title>Contacts</title>
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
            <li class="active"><a href="/upload_website/contact">Contact</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/upload_website/register">New User?</a></li>
            <li><a href="/upload_website/login">Login</a></li>
          </ul>
          </div>
    </nav>

  <div class="container">
  <div class="panel panel-default">
  <div class="panel-heading text-center"><strong>Contact Information</strong></div>
  <div class="panel-body text-center">

    <strong style="color:green;">Contact</strong><strong> :</strong> <span style="color:blue;">7881123908</span><br>
    <strong style="color:green;">Alt. Contact</strong><strong> :</strong> <span style="color:blue;">9934091008</span><br>
    <strong style="color:green;">Email id</strong><strong> :</strong><span style="color:blue;"> sanusaurav8082@gmail.com</span><br>
    <strong style="color:green;">Alt. Email id</strong><strong> :</strong> <span style="color:blue;">sanjayproject04338@gmail.com</span><br>
  </div>
</div>
  <div class="row" id="contact_breadcrumb">
  <ol class="breadcrumb">
  <li><a href="/upload_website/">Home</a></li>
  <li class="active">Contact</li>
  <li><a href="/upload_website/about">About</a></li>
</ol>
<div class="copyright">&copy;2016 All Rights Reserved</div>
</div>
</div>
  <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
<script src="/upload_website/js/bootstrap.js"></script>
</body>
</html>