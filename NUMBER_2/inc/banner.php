<?php
/*
 * Сохраняем полную иформацию альфа-канала при сохранении изображения
 * Создаем новое изображение с нужными параметрами
 * Задаем режим сопряжения цветов для изображения
 * Сохраняем полную иформацию альфа-канала при сохранении изображения
 * Создаем цвет для изображения
 * Заливаем изображение
 * Делаем прозрачность
 * Рассчитываем пропорции
 * Копируем и изменяем размер изображения и сохраняем в $tmp
 */
$filename = $_SERVER['D:main'].'inc/big_banner.png';
$info   = getimagesize($filename);
$width  = $info[0];
$height = $info[1];
$img = imageCreateFromPng($filename);
imageSaveAlpha($img, true);
$w = 200;
$h = 100;
$new_img = imageCreateTrueColor($w, $h);
imagealphablending($new_img, true);
imageSaveAlpha($new_img, true);
$transparent = imagecolorallocatealpha($new_img, 0, 0, 0, 127);
imagefill($new_img, 0, 0, $transparent);
imagecolortransparent($new_img, $transparent);
$tw = ceil($h / ($height / $width));
$th = ceil($w / ($width / $height));
if ($tw < $w) {
    imageCopyResampled($new_img, $img, ceil(($w - $tw) / 2), 0, 0, 0, $tw, $h, $width, $height);
} else {
    imageCopyResampled($new_img, $img, 0, ceil(($h - $th) / 2), 0, 0, $w, $th, $width, $height);
}
$save= $_SERVER['D:main'].'inc/banner.png';
imagepng($new_img,$save);
