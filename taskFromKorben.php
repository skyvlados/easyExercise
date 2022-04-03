<?php
// наша размерность
$minDimension=$_POST["sizeX"] ?? 3;
$maxDimension=$_POST["sizeY"] ?? 4;
$widthLine=$_POST["widthLine"] ?? 1;

// пока тут просто путь , но в будущем можно будет брать загруженный пользователем файл прямо из браузера
//$pathToImage = "testImage.png";
$pathToImage =$_FILES["pathToImage2"]["tmp_name"];

// создаем обьект чтобы рисовать потом в нем линии - по сути создается новое изображение из файла
$image = imagecreatefrompng($pathToImage);

// получаем размерность изображения (ширину и длину)
$imageInfo = getimagesize($pathToImage);
$width = $imageInfo[0];
$height = $imageInfo[1];

// чтобы рисовать на изображении нужно отдельно создать цвет которым рисовать - это черный будет
$blackColor = imagecolorallocate($image, 255, 0, 0);

// нужно определить картинка 3х4 или 4х3, для этого ты правильно сказал нужно определить меньшую или большую сторону
$is3on4=false;
if ($width < $height) {
    $is3on4=true;
}

// когда мы знаем 3х4 или 4х3 мы можем понять сколько линий должно быть вертикальных, а сколько горизонтальных
$countHorizontalLines=0;
$countVerticalLines=0;

if ($is3on4) {
    $countVerticalLines=$minDimension-1;
    $countHorizontalLines=$maxDimension-1;
    $oneHorizontalSection=($height-$countVerticalLines*$widthLine)/$minDimension;
    $oneVerticalSection=($width-$countHorizontalLines*$widthLine)/$maxDimension;
} else {
    $countVerticalLines=$maxDimension-1;
    $countHorizontalLines=$minDimension-1;
    $oneHorizontalSection=($width-$countVerticalLines*$widthLine)/$maxDimension;
    $oneVerticalSection=($height-$countHorizontalLines*$widthLine)/$minDimension;
}

// далее расчитываем координаты и рисуем вертикальные линии (сверху вниз)

for ($i = 1; $i <= $countVerticalLines; $i++) {
    $x1=$oneHorizontalSection*$i+$widthLine*($i-1);
    $x2=$oneHorizontalSection*$i+$widthLine*$i;
    $y1=0;
    $y2=$height;
    imagefilledrectangle($image, $x1, $y1, $x2, $y2, $blackColor);
}

// далее расчитываем координаты и рисуем горизонтальные линии (сверху вниз)
for ($i = 1; $i <= $countHorizontalLines; $i++) {
    $x1=0;
    $x2=$width;
    $y1=$oneVerticalSection*$i+$widthLine*($i-1);
    $y2=$oneVerticalSection*$i+$widthLine*$i;
    imagefilledrectangle($image, $x1, $y1, $x2, $y2, $blackColor);
}

// Устанавливаем тип содержимого в заголовок, в данном случае image/jpeg
header('Content-Type: image/png');

// Выводим изображение в браузер (вместо html-кода)
imagepng($image, 'modifyImage.png');
imagepng($image);

// Освобождаем память
imagedestroy($image);