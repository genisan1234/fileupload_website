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
            <li class="active"><a href="/upload_website/">Home</a></li>
            <li><a href="/upload_website/about">About</a></li>
            <li><a href="/upload_website/contact">Contact</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/upload_website/register">New User?</a></li>
            <li><a href="/upload_website/login">Login</a></li>
          </ul>
       </div>
    </nav>
<div class="container">
	<div class="row">

    </div>
	<div class="row">
	  <div class="jumbotron">
	  <h1 class="display-4">Upload Files</h1>
	  <p class="lead">This is a simple website designed to upload your docs on the web. These docs can be downloaded in the future if needed.</p>
	  <hr class="my-4">
	  <p>You need to register with us to get full advantage of the website.Thank you!!</p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="/upload_website/about" role="button">Learn more</a>
	  </p>
	  </div>
	</div>
	  <div class="row" id="contact_breadcrumb">
  <ol class="breadcrumb">
  <li>Home</li>
  <li><a href="/upload_website/contact">Contact</a></li>
  <li><a href="/upload_website/about">About</a></li>
</ol>
<div class="copyright">&copy;2016 All Rights Reserved</div>
</div>
</div>
  <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
<script src="/upload_website/js/bootstrap.js"></script>

</div>
</body>
</html>


