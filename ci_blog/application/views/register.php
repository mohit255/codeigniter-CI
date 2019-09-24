<?php
if($this->session->userdata('username'))
{
	redirect('articlespage');
}
?>
<section id="content" style="background: orange;">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<center><h2>Registration Form</h2></center>
	 <form  method="post" id="myform" name="myform">
		<div class="form-group">
		 <label>USERNAME</label>
		 <input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
		 <label>PASSWORD</label>
		 <input type="password" class="form-control" name="password">
		</div>
		<div class="form-group">
		 <label>AGE</label>
		 <input type="text" class="form-control" name="age">
		</div>
		<div class="form-group">
		 <label>CITY</label>
		 <select class="form-control" name="city">
		 	<option value="delhi">DELHI</option>
		 	<option value="gurgaon">GURGAON</option>
		 </select>
		</div>
		<div class="form-group">
			<label>ROLE</label>
			<select name="role" class="form-control" id="role">
                      <option value="author">author</option>
                      <option value="admin">admin</option>
             </select>
		</div>
		<div class="form-group">
	<center><input type="submit" name="submit" id="submit" class="btn btn-success" ></center>
		</div>
	 </form>
	</div>
</div>
</section>