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

  body{
    background-color:#f4f4f4;
  }
  </style>
  <title>Login</title>
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
            <li class="active"><a href="/upload_website/register">New User?</a></li>
            <li><a href="/upload_website/login">Login</a></li>
          </ul>
        </div>
    </nav>
  <div class="container">
        <?php
    if(isset($_GET['error'])){
      if(!isset($_SESSION['register_source'])){header('Location: /upload_website/register/');exit;}
      unset($_SESSION['register_source']);
      echo "<h4 style='width:500px;display:block;margin:auto' class='alert alert-danger text-center'>".$_GET["error"]."</h4>";
    }
    ?>
    <div class="text-center"><h2>Registration Form</h2></div>
<form method="post" action="/upload_website/insert_user">
    <div class="form-group">
    <label for="name" style="width:500px;display:block;margin:auto">Full Name</label>
    <input type="text" class="form-control" id="name" name="firstname" placeholder="John Doe" style="width:500px;display:block;margin:auto" required>
  </div>
    <div class="form-group">
    <label for="email" style="width:500px;display:block;margin:auto">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="jdoe@gmail.com" style="width:500px;display:block;margin:auto" required>
  </div>

  <div class="form-group">
    <label for="username" style="width:500px;display:block;margin:auto">Username</label>
    <input type="text" class="form-control center-block" id="username" name="username" placeholder="JohnDoe" style="width:500px;display:block;margin:auto" required>
  </div>
  <div class="form-group">
    <label for="password" style="width:500px;display:block;margin:auto">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="********" style="width:500px;display:block;margin:auto" required>
  </div>
    <div class="form-group">
    <label for="confirm_password" style="width:500px;display:block;margin:auto">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="********" style="width:500px;display:block;margin:auto" required>
  </div>

  <button type="submit" class="btn btn-primary" style="display:block;margin:auto">Submit</button>
</form>
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