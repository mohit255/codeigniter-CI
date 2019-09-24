 
<div class=" ">
 
</div>
<div class="col-sm-2" style="position:fixed; right:0px; margin-top:0px">
                        
						 <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Username /Guest  Image</h3>
                            </div> 
                           					
									<?php	
											 
							if(isset($_SESSION['user_id']))
							{ 
							 ?>
							  <li class="list-group-item" style="text-align:left;font-size:20px;"><?php if(isset($_SESSION['user_id'])){ echo $_SESSION['username'];}?></li>
							 
							 <?php 
							echo anchor('/logout','Logout','class="list-group-item"');
							echo anchor('/writepost','Write Post','class="list-group-item"');
							}
							
							else 
							{
							echo anchor('/profile','Profile','class="list-group-item"');
							echo anchor('/login','Login','class="list-group-item"');
							}
							?>



                             <?php echo anchor('/latestpost','Latest Post','class="list-group-item"');?>  
                            <?php echo anchor('/category','Category','class="list-group-item"');?>  
 
                        </div>
                    </div>
					</div>
				 