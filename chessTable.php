<?php
//Количество ячеек по горизонтали и вертикали
$x=9;
$y=9;

//Размер ячейки в пикселях
$cell=100;

//Создание чистой доски
$table=imagecreatetruecolor($x*$cell,$y*$cell);
$whiteColor = imagecolorallocate($table, 255, 255, 255);
imagefill($table, 0, 0, $whiteColor);

// чтобы рисовать на изображении нужно отдельно создать цвет которым рисовать - это черный будет
$blackColor = imagecolorallocate($table, 0, 0, 0);
//коэффициент смещения
$k=0;

// далее расчитываем координаты и рисуем вертикальные линии (сверху вниз)
for ($i = 0; $i < $y; $i++) {
    if ($i % 2!=0) {
        $k=1;
    } else{
        $k=0;
    }
    for ($j = $k; $j < $x; $j+=2) {
        $x1=$cell*$j;
        $y1=$cell*$i;
        $x2=$cell*($j+1);
        $y2=$cell*($i+1);
        imagefilledrectangle($table, $x1, $y1, $x2, $y2, $blackColor);
    }
}

// Устанавливаем тип содержимого в заголовок, в данном случае image/jpeg
header('Content-Type: image/png');

// Выводим изображение в браузер (вместо html-кода)
imagepng($table);

// Освобождаем память
imagedestroy($table);
