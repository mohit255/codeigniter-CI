<?php $eml=$this->session->userdata('em_add'); ?>
 <!-- content -->
 <div id="content">
   <div id="welcome">
   <h2>Latest News </h2>
   <?php
   if($eml!="")
   {?>
   
<?php if($feedback_success=$this->session->flashdata('feedback_success')): //flashing data if user registered/logged in ?>     
<span style="color: green; font-family: helvetica;font-weight: bold;"><?php  echo $feedback_success; ?></span>
<?php endif ; ?>

     <h1><span>Add Your Blog Post From Here !</h1>
     <br />
           <form id="contacts-form" method="post">
          <fieldset>
            <div class="field">
              <label>Post Title:</label>
              <input type="text" name="pt" placeholder="Write Post Title.." value="" required />
            </div>
            <div class="field">
              <label>Blog Post:</label>
              <textarea cols="1" rows="1" name="post" placeholder="Write Your Post.." required ></textarea>
            </div>
            <input type="hidden" name="pemail" value="<?php echo $eml; ?>" />
            <div class="wrapper"><button type="submit" name="blog_btn" class="link1">Post To Blog</button></div>
          </fieldset>
        </form>
    </div>
    <br />
 <table>
  <tr>
    <th>Post No.</th>
    <th>Post By</th>
    <th>Post Title</th>
    <th>Post Time</th>
    <th>Post</th>
    <th colspan="2">Action</th>
  </tr>

  <?php
  $count=1;
  foreach($posts as $key)
  {?>
  <tr>
        <td><?php echo $count++."." ?></td>
        <td><?php echo $key->post_by ?></td>
        <td><?php echo $key->post_title ?></td>
        <td><?php echo $key->post_time ?></td>
        <td><?php echo $key->post ?></td>
		<td><?=anchor("home/post_edit/{$key->id}", '<button class="btn btn-danger btn-block">Edit</button>')?></td>
		<td><?=anchor("home/post_del/{$key->id}", '<button class="btn btn-danger btn-block">DELETE</button>')?></td>
      </tr>
	  
  <?php }  ?>
</table>
<?php } ?>

<br />
<div class="w3-col l8 s12">
  <!-- Blog entry -->
    <?php
  $count=1;
  foreach($posts as $key)
  {?>
  
  <div class="w3-card-4 w3-margin w3-white">
    
    <div class="w3-container">
      <h3><b><?php echo $key->post_title ?></b></h3>
      <h5><b>By :</b><?php echo $key->post_by ?>, <span class="w3-opacity"><?php echo $key->post_time ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php echo $key->post ?></p>
      
    </div>
  </div>
  <hr>
  <?php }  ?>


  <!-- Blog entry -->
  </div>
</div>