 <!-- content -->
 <div id="content">
              <h2>Users List</h2>
        <p>You are supposed to place some contact infromation on this page. You may place a map here with some instructions on how to get to your office or just a contact form. Note that the contact form below is not working.</p>
        
<table>
  <tr>
    <th>ID No.</th>
    <th>First Name</th>
    <th>Last Nme</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
  <?php
  foreach($users as $key)
  {?>
  <tr>
        <td><?php echo $key->id."." ?></td>
        <td><?php echo $key->firstname ?></td>
        <td><?php echo $key->lastname ?></td>
        <td><?php echo $key->mobile ?></td>
        <td><?php echo $key->email ?></td>
        <td><?php echo $key->password ?></td>
      </tr>
	  
  <?php }  ?>
</table>
        
      </div>