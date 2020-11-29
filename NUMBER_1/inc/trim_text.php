<?php
$a='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus diam quis elit rutrum dapibus. Maecenas nunc nisi, volutpat in mauris in, interdum tincidunt justo. Cras id sollicitudin magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In accumsan dui quis dolor dapibus, et posuere odio maximus. Morbi eu libero volutpat, ultricies nibh vel, ullamcorper felis. Pellentesque lacinia nisi nec ullamcorper eleifend. Donec pulvinar tincidunt arcu, sit amet hendrerit magna commodo non. Etiam blandit nunc a nulla sollicitudin vestibulum. Nulla facilisi. Phasellus ut ante massa. Praesent vel porta diam. Duis sit amet erat quam. Sed vehicula congue dui, non mattis diam consectetur eget. Proin magna dui, vestibulum vitae pellentesque ac, elementum imperdiet odio.Nunc et viverra nisl, vel maximus leo. Cras euismod venenatis lectus, auctor dictum arcu sodales eu. Donec tristique libero at purus ornare blandit. Integer ut eros nisi. In ullamcorper massa id erat.';
$link='article.php';
/* Проблемы могу быть если текст короче 180 символов. Решение: если текст короткий - не обрезаем, просто делаем последние 2
 * слова ссылкой на текст.
 * Проверяем текст больше 180 символов или нет.
 *Записываем в $b текст удаляем пробелы с конца строки, обрезаем текст до 177 символов и добовляем '...'
 *Разбиваем текст на слова с помощью разделителя
 *Считаем количество элементов в массиве, выбираем два последних и записываем их массив $last2word
 * С помощью strrops находим два последних слова в $b и вычитаем их с помощью substr
 */
if(strlen($a)>180) {
    $b = rtrim(mb_strimwidth($a, 0, 180 - strlen($trimmarker='...'))) . $trimmarker;
    $array = explode ( ' ', $b );
    $last2word = implode ( ' ', array_slice($array, count($array)-2, 2));
    $b=substr($b, 0, strrpos($b, $last2word ));
    echo $b.'<a href=' . $link . '>' . $last2word . '</a>';
}
else {
    $b=$a;
    $array = explode ( ' ', $b );
    $last2word = implode ( ' ', array_slice($array, count($array)-2, 2));
    $b=substr($b, 0, strrpos($b, $last2word ));
    echo $b.'<a href=' . $link . '>' . $last2word . '</a>';
}