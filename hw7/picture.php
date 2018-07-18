<?php

 session_start();
 $lines = $_SESSION["lines"];
 $image = imagecreatetruecolor(300, 300);
 $backColor = imagecolorallocate($image, 245, 245, 220);
 $textColor = imagecolorallocate($image, 0, 15, 90);
 $boxFile = __DIR__ . '/1.png';
  if (!file_exists($boxFile)) {
  echo 'Файл с картинкой не найден!';
  exit;
 }
 $imBox = imagecreatefrompng($boxFile);
 imagefill($image, 0, 0, $backColor);
 imagecopy($image, $imBox, 0, 30, 0, 0, 320, 240);
 $fontFile = __DIR__ . '/times.ttf';
 if (!file_exists($fontFile)) {
  echo 'Файл со шрифтом не найден!';
  exit;
 }
 imagettftext($image, 30, 0, 10, 40, $textColor, $fontFile, $lines[0]);
 imagettftext($image, 15, 0, 75, 65, $textColor, $fontFile, $lines[1]);
 imagettftext($image, 15, 0, 70, 85, $textColor, $fontFile, $lines[2]);
 header('Content-Type: image/png');
 imagepng($image);
 imagedestroy($image);
 
 ?>