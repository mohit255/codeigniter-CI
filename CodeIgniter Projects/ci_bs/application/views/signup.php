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
<body>
 
 <div id="page-wrapper">
 <h1 class="page-header">
                            
                        </h1>
                <!-- Page Heading -->
                <div class="row">
				 <div class="col-lg-3"> 
                    </div>
					
                    <div class="col-lg-4">
						<ol class="success">
                              <h2>
                            Sign Up
                        </h2> 
                        </ol>
                   <?php echo form_open('user/signup'); ?>

                            <div class="form-group"> 
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control" >
                             </div>

							 <div class="form-group"> 
                                <input type="text" name="password" id="password" placeholder="Password" class="form-control" >
                             </div>
							 
                             <div class="form-group"> 
                                <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" >
                             </div>
							 
							 <div class="form-group"> 
                                <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control" >
                             </div>
							         
							<div class="form-group"> 
                                <input type="text" name="email" id="email" placeholder="Email Id" class="form-control" >
                             </div>

                             <div class="form-group"> 
                                <input type="text" name="number" id="number" placeholder="Contact Number" class="form-control" >
                             </div>
							 
							  <div align="center"> 
						<button type="submit" class="btn btn-sm btn-success">&nbsp&nbsp&nbsp&nbsp&nbsp; Submit &nbsp&nbsp&nbsp&nbsp&nbsp;</button>
                             </div>
  


                        </form>

 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
  
                <!-- Page Heading -->
			 
				   
				   
</body>
</html>