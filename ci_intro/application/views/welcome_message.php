<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>


</head>
<body>

<div id="container">
	<h2><?php echo $page_header ;?></h2>

	<div id="body">
	<?php

		foreach ($firstname as $object) {
			echo $object->firstname .'<br/>';
		}

		echo '</br></br></br>';

			foreach ($users as $object) {
			echo $object->firstname .'\'s email
	address is '.$object->email.'</br>'
	;
		}


	?>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>