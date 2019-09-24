<?php
$un=$this->session->userdata('un');
?>
<div id="content">
    <div id="welcome">
      <h1 class="title"><span>Latest</span> News!</h1>
    <?php
	if($un!="")
	{
	 echo anchor("Posts/addblog","Add Blog");	
	}
	?>  
    <div>
      <?php
	  if($un!="")
	{
	  foreach($fe as $f)
	  {
		?>
       <h2><?php echo $f['title'];?></h2>
       <p><img src="../upload/<?php echo $f["img"];?>" width="100" height="50"/></p>
       <p><?php echo substr($f['descp'],0,20)."..";?></p>
    
        <?php  
	  }
	  }
	  ?>
    </div>
    </div>
  </div>
  
  
  
  
  