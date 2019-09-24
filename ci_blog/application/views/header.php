<?php
$username=$this->session->userdata('username');
$role=$this->session->userdata('role');
?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/footer.css');?>">
<style>
.carousel .item {  height: 300px;}
.item img { position: absolute; top: 0; left: 0; min-height: 300px;}
</style>
</head>
<body>
	<!--main container!-->
<div class="container">
	<header>
<!--nav!-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url();?>">ARTICLES BLOG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><?= anchor("articlespage","Home");?></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Articles</a></li>

       
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      	<li><?= anchor('user/register','Register'); ?></li>
        <li><?php
               if($username!="")
               {
                echo anchor("user/logout","Logout");
               }
               else
               {
                echo anchor("user/login","Login");
               }
            ?></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--nav!-->
<!--carousl!-->

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
      <img src="<?= base_url('assets/images/img1.jpg');?>" >
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="<?= base_url('assets/images/img2.jpg');?>" >
      <div class="carousel-caption">
        
      </div>
    </div>
    
    <div class="item">
      <img src="<?= base_url('assets/images/img2.jpg');?>" >
      <div class="carousel-caption">
        
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
<!--carousl!-->
	</header>


