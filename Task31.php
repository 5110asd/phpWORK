<?php
//Дан массив ['Привет, ', 'мир', '!'].
//Необходимо записать в первый элемент (то есть элемент с номером ноль)
//этого массива слово 'Пока, ' (то есть вместо слова 'Привет, ' будет 'Пока, ' ).

$arr = ['Привет, ', 'мир', '!'];
echo '<h1>Приветствие: ' . join($arr) . '</h1>';

$arr[0] = 'Пока, ';
echo '<h1>Прощание: ' . join($arr) . '</h1>';
?>
