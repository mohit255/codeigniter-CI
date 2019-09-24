<?php 
$username=$this->session->userdata('username');
$role=$this->session->userdata('role');

 if($feedback_success=$this->session->flashdata('feedback_success')): //flashing data if user registered/logged in ?>     
<span style="color: green; font-family: helvetica;font-weight: bold;"><?php  echo $feedback_success; ?></span>
        
    <?php endif ; 

 if($username!="")
  {
  	echo "<center><h1>Welcome $username</h1></center>";
    ?>
    <a href="<?= base_url('article/addArticle') ?>" class="btn btn-success">Add Article</a>
    <a href="<?= base_url('article/show_articles') ?>" class="btn btn-primary pull-right">All Articles List</a>
    <?php
   }
?>
