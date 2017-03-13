<?php

header('Content-Type: image/png');
$im = imagecreate(310, 350);
$background_color = imagecolorallocate($im, 0, 0, 100);
$textcolor = imagecolorallocate($im, 14, 233, 91);
imagepng($im);