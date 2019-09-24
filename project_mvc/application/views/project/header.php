<?php
$un=$this->session->userdata('un');
$r=$this->session->userdata('rol');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Fashion</title>
    <?= link_tag('assests/style.css'); ?>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
    
    <?= link_tag('assests/own/style.css'); ?>
    <?= link_tag('assests/css/bootstrap.min.css'); ?>
    <script src="<?= base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assests/jquery/jquery.js'); ?>"></script>
    <script src="<?= base_url('assests/jquery/jquery1.js'); ?>"></script>
    <script src="<?= base_url('assests/jquery/jquery2.js'); ?>"></script>
  </head>
  <body>
    <div class="tail-top">
      <div class="tail-bottom">
        <div id="main">
          <!-- header -->
          <div id="header">
            <div class="row-1">
              <ul class="top-nav">
                <li><a href="#"><img alt="" src="<?= base_url('assests/images/icon-home.gif')?>" /></a></li>
                <li><a href="#"><img alt="" src="<?= base_url('assests/images/icon-mail.gif')?>" /></a></li>
                <li><a href="#"><img alt="" src="<?= base_url('assests/images/icon-map.gif')?>" /></a></li>
              </ul>
              <form action="#" id="search-form">
                <fieldset>
                  website search &nbsp;
                  <input type="text" value="" class="text" />
                </fieldset>
              </form>
            </div>
            <div class="row-2">
              <div class="indent"> <a href="#"><img alt="" src="<?= base_url('assests/images/logo.jpg')?>" /></a> </div>
            </div>
            <div class="row-3">
              <ul class="site-nav">
                <li><?= anchor('Posts','Home'); ?></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><?= anchor('User/regis','Register'); ?></li>
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