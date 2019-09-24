<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
<?php ######################################################## LINK CSS###############################################################################?>    
<?php echo link_tag('css/style.css') ?>

</head>
<body>
<?php ########################################################## URL HRLPER ############################################################################ ?>
<div id="container">
	<h2><?php echo $page_header ;?></h2>

	<div id="body">
    <p>Base URL : <?=base_url(); ?></p>
    <p>Site URL : <?=site_url(); ?></p>
    <p>About URL : <?=site_url("about"); ?></p>
<p>SLUG for 'My First Page' :<?=url_title("MY First Page")?></p>
<p>for details <?=mailto("mohitchack255@gmail.com","contact me")?></p>    
     
<?php ########################################################### Email HELPER ############################################################################# 


?>    
    
	<?php

################################################################# DATA FETCH FROM DB #########################################################################	
	echo heading('First Name',1,'class="india"');

		foreach ($firstname as $object) {
			echo $object->firstname .'<br/>';
		}

		echo '</br></br></br>';
		
	echo heading('First Name, Last Name',1,'class="india"');	
		
		foreach($lastname as $object){
			echo $object->firstname." ". $object->lastname.'<br/>';
		}
		
		echo '</br></br></br>';
		
	echo heading('First Name, Last Name, Mobile',1,'class="india"');	

		foreach ($mobile as $object) {
		echo $object->firstname ." ".$object->lastname. " ".$object->mobile.'<br/>';
		}
		
		echo '</br></br></br>';
		
	echo heading('First Name, Last Name, Mobile ,Email',1,'class="india"');
		
		foreach ($email as $object) {
		echo $object->firstname ." ".$object->lastname. " ".$object->mobile." ".$object->email.'<br/>';
		}
		
		echo '</br></br></br>';
		
		
	echo heading('All Fields from table.',1,'class="india"');
		foreach ($users as $object) {
		echo $object->id." ".$object->firstname ." ".$object->lastname. " ".$object->mobile." ".$object->email.'<br/>';
		}
		
		echo '</br></br></br>';
############################################# IMAGE INSERT ONLINE ######################################################

        echo img('https://assetscdn1.paytm.com/images/catalog/view_item/224077/1528877822366.jpg?imwidth=758&amp;impolicy=hq_80');	
		echo br();
		
		$image_properties = array(
        'src'   => 'https://assetscdn1.paytm.com/images/catalog/view_item/224077/1528877822366.jpg?imwidth=758&amp;impolicy=hq_80',
        'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
        'class' => 'post_images',
        'width' => '200',
        'height'=> '200',
        'title' => 'That was quite a night',
        'rel'   => 'lightbox'
);

echo img($image_properties);
################################################# OFLINE IMAGE ########################################
?>
<?php 
$image_with_style = array(
        'src'   => 'images/2017.jpg',
        'alt'   => 'Me',
        'class' => 'post_images',
        'width' => '200',
        'height'=> '200',
        'title' => 'Mohit Chack',
        'rel'   => 'lightbox'
);
echo img($image_with_style);
echo img('images/2017.jpg'); ?>


<?php 
$list =array(
             'red',
			 'blue',
			 'green',
			 'yellow'
			 );

$attribute= array(
             'class'=>'list',
			 'id'=>'mylist'
);

echo ul($list,$attribute);



$attributes = array(
        'class' => 'boldlist',
        'id'    => 'mylist'
);

$list = array(
        'colors'  => array(
                'red',
                'blue',
                'green'
        ),
        'shapes'  => array(
                'round',
                'square',
                'circles' => array(
                        'ellipse',
                        'oval',
                        'sphere'
                )
        ),
        'moods'  => array(
                'happy',
                'upset' => array(
                        'defeated' => array(
                                'dejected',
                                'disheartened',
                                'depressed'
                        ),
                        'annoyed',
                        'cross',
                        'angry'
                )
        )
);

echo ul($list, $attributes);



?>




</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>