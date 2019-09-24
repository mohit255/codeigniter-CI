<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
<?php ######################################################## LINK CSS###############################################################################?>    
<?php echo link_tag('bootstrap/css/bootstrap.css') ?>

</head>
<body>


<div class="container">
  <h2>DATA RECORDS WITH CI.</h2>
    <form class="form-inline row">
    <div class="form-group col-xs-4">
      <label for="name">Name:</label>
      <input type="password" class="form-control" placeholder="Enter Name">
    </div>
    <div class="form-group col-xs-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group col-xs-4">
    
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
</div>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th>ID NO.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Mobile No.</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	foreach($users as $key)
	{ ?>
    <tr>
        <td><?php echo $key->id."." ?></td>
        <td><?php echo $key->firstname ?></td>
        <td><?php echo $key->lastname ?></td>
        <td><?php echo $key->mobile ?></td>
        <td><?php echo $key->email ?></td>
      </tr>
		//echo $key->id." ".$key->firstname ." ".$key->lastname. " ".$key->mobile." ".$key->email.'<br/>';
	<?php } ?>
	
    </tbody>
  </table>

</div>



</body>
</html>