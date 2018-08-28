<?php
// initialisation
mt_srand(microtime()*1000000);

header("Content-type: image/jpg");

$img_tab = ['fond_1.jpg', 'fond_2.jpg', 'fond_3.jpg','fond_4.jpg','fond_5.jpg', 'fond_6.jpg'];

$nb = mt_rand(0,5);

// chargement de l'image
$image = imagecreatefromjpeg($img_tab[$nb]);

imagejpeg($image);
	
?>