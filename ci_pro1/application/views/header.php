 <?php
 $un=$this->session->userdata('un');
 $r=$this->session->userdata('rol');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fashion</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo base_url();?>public/style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><link href="ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <!-- header -->
      <div id="header">
        <div class="row-1">
          <ul class="top-nav">
            <li><a href="#"><img alt="" src="<?php echo base_url();?>public/images/icon-home.gif" /></a></li>
            <li><a href="#"><img alt="" src="<?php echo base_url();?>public/images/icon-mail.gif" /></a></li>
            <li><a href="#"><img alt="" src="<?php echo base_url();?>public/images/icon-map.gif" /></a></li>
          </ul>
          <form action="#" id="search-form">
            <fieldset>
              website search &nbsp;
              <input type="text" value="" class="text" />
            </fieldset>
          </form>
        </div>
        <div class="row-2">
          <div class="indent"> <a href="#"><img alt="" src="<?php echo base_url();?>public/images/logo.jpg" /></a> </div>
        </div>
        <div class="row-3">
          <ul class="site-nav">
            <li><a href="">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Articles</a></li>
       <li><?php echo anchor("User/regis","Regis Here");?></li>
            <li>
            <?php
			if($un!="")
			{
			echo anchor("User/logout","Logout");	
			}
			else
			{
			echo anchor("User/login","Login");	
			}
			?>
            </li>
          </ul>
        </div>
      </div>
      
      
      
      
      
      