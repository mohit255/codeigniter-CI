<?php
echo doctype('html5');
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<?php echo meta('description', 'My Great site');


echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');


echo meta(array('name' => 'robots', 'content' => 'no-cache'));
$meta = array(
        array(
                'name' => 'robots',
                'content' => 'no-cache'
        ),
        array(
                'name' => 'description',
                'content' => 'My Great Site'
        ),
        array(
                'name' => 'keywords',
                'content' => 'love, passion, intrigue, deception'
        ),
        array(
                'name' => 'robots',
                'content' => 'no-cache'
        ),
        array(
                'name' => 'Content-type',
                'content' => 'text/html; charset=utf-8', 'type' => 'equiv'
        )
);
	
?>
<?php
echo meta($meta);
?>
	<title><?php echo $title; ?></title>

<?php echo link_tag('public/style.css') ?>
</head>
<body>

<div id="container">
	<h2><?php echo $page_header ;?></h2>

	<div id="body">
<?php	
		echo heading('Ducat',1,'class="india"');
		echo heading('Welcome!', 3, 'class="pink"');
		echo heading('How are you?', 4, array('id' => 'question', 'class' => 'green'));
		
		
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



?>
		
		
	</div>
	</div>
	</body>
	</html>