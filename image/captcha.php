<?php
// initialisation
mt_srand(microtime()*1000000);

header("Content-type: image/jpg");

$img_tab = ['fond_1.jpg', 'fond_2.jpg', 'fond_3.jpg','fond_4.jpg','fond_5.jpg', 'fond_6.jpg'];

$img = mt_rand(0,5);

// chargement de l'image
$image = imagecreatefromjpeg($img_tab[$img]);

imagejpeg($image);

$nb1 = mt_rand(65,90);

chr($nb1);

$text_color = imagecolorallocate ($image, 255, 255, 255);

//imagettftext (image destination, taille, inclinaison, pos_x, pos_y, couleur, chemin police ttf, texte a écrire);
imagettftext ($image, 10, 20, 50, 20, $text_color, "./desyrel.ttf", $nb1);

imagejpeg($image);

?>