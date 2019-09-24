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
                            Write New Post
                        </h2> 
                        </ol>
                       <?php echo form_open('user/writepost');?>
       

                            <div class="form-group"> 
                              Title 
							  <input type="text" name="title" id="title" placeholder=" " class="form-control" >
                             </div>

							 <div class="form-group"> 
                               Author <input type="text" name="author" id="author" placeholder=" " class="form-control" >
                             </div>
							         <?php echo form_hidden('user_id',$_SESSION['user_id']); ?>
 
							        <div class="form-group">
							<label for="category">Categories</label>
								<select name="categories" class="form-control" id="category">
									<option value="Weather" <?php //('weather'==$post->category) ? echo "selected";?>>Weather</option>
									<option value="Sports">Sports</option>
									<option value="Bollywood">Bollywood</option>
									<option value="Hollywood">Hollywood</option>
									<option value="News">News</option>
								</select>
						</div>
							 
						 
							  <div class="form-group"> 
							  
                               Description 
							   <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                               </div>
							 
							  <div align="center"> 
						<button type="submit" class="btn btn-sm btn-success">&nbsp&nbsp&nbsp&nbsp&nbsp; Post &nbsp&nbsp&nbsp&nbsp&nbsp;</button>
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