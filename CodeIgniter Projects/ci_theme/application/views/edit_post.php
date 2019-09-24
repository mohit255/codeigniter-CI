<?php $eml=$this->session->userdata('em_add'); ?>
 <!-- content -->
 <div id="content">
   <div id="welcome">
   <h2>Edit Your Post</h2>
     <h1>Your Can Edit Your Post From Here !</h1>
     <br />
     <?php
	 $fstyle = array(
		'id'=>'contacts-form'
);	 
	 ?>
     <?= form_open("home/update_post/{$epost->id}",$fstyle) ; ?>
          <fieldset>
            <div class="field">
              <label>Post Title:</label>
              <input type="text" name="ept" placeholder="Write Post Title.."  required value="<?= $epost->post_title; ?>"/>
            </div>
            <div class="field">
              <label>Blog Post:</label>
              <textarea cols="1" rows="1" name="epost" placeholder="Write Your Post.." required ><?= $epost->post; ?></textarea>
            </div>
            <div class="wrapper"><button type="submit" name="edit_post" class="link1">Edit My Post</button></div>
          </fieldset>
    <?= form_close(); ?>
    
   </div>
   <br />
 
</div>