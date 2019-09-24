<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$eml=$this->session->userdata('em_add');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fashion</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?=base_url(); ?>assets/style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><link href="ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
};
</style>
</head>
<body>
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <!-- header -->
      <div id="header">
        <div class="row-1">
          <ul class="top-nav">
            <li><a href="#"><img alt="" src="<?=base_url(); ?>assets/images/icon-home.gif" /></a></li>
            <li><a href="#"><img alt="" src="<?=base_url(); ?>assets/images/icon-mail.gif" /></a></li>
            <li><a href="#"><img alt="" src="<?=base_url(); ?>assets/images/icon-map.gif" /></a></li>
          </ul>
          <form action="#" id="search-form">
            <fieldset>
              website search <?php echo $eml; ?>&nbsp;
              <input type="text" value="" class="text" />
            </fieldset>
          </form>
        </div>
        <div class="row-2">
          <div class="indent"> <a href="#"><img alt="" src="<?=base_url(); ?>assets/images/logo.jpg" /></a> </div>
        </div>
        <div class="row-3">
          <ul class="site-nav">
            <li><?php echo anchor("home","Home"); ?></li>
            <li><?php echo anchor("Auth/users","Users");?></li>
            <li><a href="about_us.html">About Us</a></li>
<!--            <li><a href="articles.html">Articles</a></li>
-->         <li><?php echo anchor("contact","Contact Us");?></li>
            <li><a href="site_map.html">Site Map</a></li>
            <?php
			if($eml!="")
			{
			?>
            <li><?php echo anchor("Auth/logout","Logout");?></li>
            <?php
			}
			else
			{ ?>
            <li><?php echo anchor("Auth/regis","Registers"); ?></li>
            <li><?php echo anchor("Auth/login","Login");?></li>

			<?php 
			}
			?>
            
          </ul>
        </div>
      </div>
