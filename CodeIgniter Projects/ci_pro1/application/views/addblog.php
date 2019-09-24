<?php
$un=$this->session->userdata('un');
if($un!="")
{
?>
<div id="content">
  <div id="welcome">
      <h1 class="title">Add Blog</h1>
<?php 
echo form_open_multipart('Posts/addblog');
?>
  <table width="32%" height="200" border="1">
    <tr>
      <td colspan="2"><?php
      if(isset($ms))
	  {
		echo $ms;  
	  }
	  ?></td>
    </tr>
    <tr>
      <td><strong>Title</strong></td>
      <td><strong>
        <input type="text" name="title" id="title">
      </strong></td>
    </tr>
    
    <tr>
      <td><strong>Image</strong></td>
      <td><strong>
        <input type="file" name="att" id="att">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Description</strong></td>
      <td><strong>
        <textarea name="des" id="des" cols="25" rows="3"></textarea>
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>
</form>
</div>
</div>
<?php
}
else
{
	redirect("Posts");
}
?>