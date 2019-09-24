 <?php echo doctype('html5'); ?>
<html lang="en">

<head> 

            
                 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/media.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/font-awesome.min.css">
    <!-- <<Attched Stylesheets>> --> 

	 
	
</head>
 
<body>
     
			 <div class="page-header" style="margin-top:80px; margin-left:40px; margin-right:270px">
                    <h3>Latest Posts</h3>
                </div>




   <?php
    if($posts)
    {
    foreach ($posts as $post)
    {?>
	
	
					<div class="well" style="margin-left:60px; margin-right:300px">
				 <img class="img-thumbnail" src="http://placehold.it/60x80" alt="" style="float:left; margin-right:20px; margin-bottom:10px"> 
				 	 <ul >
					 
							
					  </br>
					  <b>Title: </b> <?=$post['title'];?> </br> 
					  <b>Category: </b> <?=$post['categories'];?> </br>
					  <b>Created By: </b> <?=$post['author'];?> </br>
					  <b>Description:</b> <?=$post['description'];?> </br> 
	 
	 <p align="right">
					<?php
					// for edit and delete

					if(isset($_SESSION["user_id"]))
						{
					  
					  //if user session id is same then its edited or deleted
						if($_SESSION['user_id']==$post['user_id'])
							{
								echo anchor('/edit/'.$post['post_id'],'Edit','class="btn btn-sm btn-success"');
								echo "\t";
								echo anchor('/delete/'.$post['post_id'],'Delete','class="btn btn-sm btn-danger"');
							}
						}
      			  ?><br>
				  </p>
   					 </div>
   				 <?php
 				   }}
 				   else{?>
				  </ul>
				  <div></div>
				  </div> 
				</div>
   				 <?php }?>
	
	
	
 	 
				 
	  
</body>

</html>