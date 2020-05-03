<?php session_start() ?>
<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.css">
  <style>
   img{
    width:100%;
    height:300px;

   }
   .slide{
    height:400px;
    overflow:hidden;
   }
   .carousel-caption
   {
    top:250px;
    bottom:auto;
   }
   .navbar{
    padding:0;
   }
 </style>
  <title>About</title>

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
            <li class="active"><a href="/upload_website/about">About</a></li>
            <li><a href="/upload_website/contact">Contact</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/upload_website/register">New User?</a></li>
            <li ><a href="/upload_website/login">Login</a></li>
          </ul>
        </div>
    </nav>
<div class="container">
  <div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/upload_website/pictures/fimg.jpg" alt="...">
      <div class="carousel-caption">
        <strong>Focus</strong>: Ease of Access
      </div>
    </div>
    <div class="item">
      <img src="/upload_website/pictures/simg.jpg" alt="...">
      <div class="carousel-caption">
        <strong>Goal</strong>: Innovation of recurrence
      </div>
    </div>
      <div class="item">
      <img src="/upload_website/pictures/timg.jpg" alt="...">
      <div class="carousel-caption">
        <strong>Way</strong>: Devotion and self-reliance
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
  <div class="panel-heading text-center"><strong>Focus</strong></div>
  <div class="panel-body">
    We majorly focus on providing people with the most
    efficient ways to upload low size files on the web and
    access the uploaded files.
  </div>
</div>
  </div>
    <div class="col-md-4">
      <div class="panel panel-default">
  <div class="panel-heading text-center"><strong>Goal</strong></div>
  <div class="panel-body">
    We focus on finding effective ways for reducing the efforts
    taken to perform recurrent work as the recurrence of work wastes
    a lot of time.
  </div>
</div>
  </div>
    <div class="col-md-4">
      <div class="panel panel-default">
  <div class="panel-heading text-center"><strong>Way</strong></div>
  <div class="panel-body">
    We aim to achieve our goal through a strongly-devoted team and
    a self-motivated group who are self-reliant to provide efficient
    services.
  </div>
</div>
  </div>
  </div>
  <hr>
  <div class="row">
  <ol class="breadcrumb">
  <li><a href="/upload_website/">Home</a></li>
  <li><a href="/upload_website/contact">Contact</a></li>
  <li class="active">About</li>
</ol>
  </div>
  <div class="text-center">&copy;2016 All Rights Reserved</div>
</div>
  <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
<script src="/upload_website/js/bootstrap.js"></script>
</body>
</html>
