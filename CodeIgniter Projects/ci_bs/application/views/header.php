<?php echo doctype('html5'); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
 
 
             
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/sb-admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/font-awesome/css/font-awesome.min.css">
 
 
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 

</head>

<body style="background-color:#FFFFFF" >  
<header>
 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header"> 
                            </button>
                            <a class="navbar-brand" href="#">Project name</a>
                        </div>
						<div style="margin-left:650px">
                 <ul class="nav nav-pills" style="margin-top:6px; margin-bottom:4px; position:relative">
  <li role="presentation" class=" "><?php echo anchor('home','Home');?> </li>
  
  
  <li role="presentation"><?php if(isset($_SESSION['user_id'])){}?></li>

  
  
  <?php if(isset($_SESSION['user_id']))
  { 
   }
  else
  {
  ?>
  
   <li role="presentation"> <?php echo anchor('login','Login');?> </li>
				  <li role="presentation"> <?php echo anchor('signup','Sign Up');?> </li>
  
  <?php 
  }
  ?> 
   
  
</ul>
</div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div> 
				</header>

</body>

</html>
