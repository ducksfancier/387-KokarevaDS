<?php
echo 'Задача 1.1';
echo '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count ($arr);
?>

<?php
echo 'Задача 1.2';
echo '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-1];
?>

<?php
echo 'Задача 2.1';
echo '<br>';
$arr = [1,2,3,4,5];
var_dump(in_array(3, $arr));
?>

<?php
echo 'Задача 3.1';
echo '<br>';
$arr = [1,2,3,4,5];
echo array_sum ($arr);
?>

<?php
echo 'Задача 3.2';
echo '<br>';
$arr = [1,2,3,4,5];
echo array_product ($arr);
?>

<?php
echo 'Задача 3.3';
echo '<br>';
$arr = [1,2,3,4,5];
echo (array_sum ($arr) / count ($arr));
?>

<?php
echo 'Задача 4.1';
echo '<br>';
$arr = range(1, 100);
var_dump($arr);
?>

<?php
echo 'Задача 4.2';
echo '<br>';
$arr = range('a', 'z');
var_dump($arr);
?>

<?php
echo 'Задача 4.3';
echo '<br>';
$string = range (1,9);
var_dump ($string);
?>

<?php
echo 'Задача 4.4';
echo '<br>';
$num = range(1, 100);
echo array_sum($num);
?>

<?php
echo 'Задача 4.5';
echo '<br>';
$num = range(1, 10);
echo array_product($num);
?>

<?php
echo 'Задача 5.1';
echo '<br>';
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
var_dump (array_merge($arr1, $arr2)); //Сливает один или большее количество массивов (array_merge)
?>

<?php
echo 'Задача 6.1';
echo '<br>';
$arr = [1,2,3,4,5];
var_dump(array_slice($arr,1,3));
?>

<?php
echo 'Задача 7.3';
echo '<br>';
$arr = [1,2,3,4,5];
$arr2 = array_splice($arr,3,0,['a','b','c']); //Удаляет часть массива и заменяет её чем-нибудь ещё (array_splice)
var_dump($arr);
?>

<?php
echo 'Задача 7.4';
echo '<br>';
$arr = [1,2,3,4,5];
array_splice($arr,1,0,['a','b']);
array_splice($arr,6,0,['c']);
array_splice($arr,8,0,['e']);
var_dump($arr);
?>

<?php
echo 'Задача 9.2';
echo '<br>';
$arr = [1,2,3,4,5];
echo '<br>';
var_dump(array_reverse($arr));
?>

<?php
echo 'Задача 10.1';
echo '<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-',$arr);
?>

<?php
echo 'Задача 10.2';
echo '<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
var_dump(array_splice($arr,1,1));
?>

<?php
echo 'Задача 11.1';
echo '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0=>'!', 3=>'!!']);
var_dump($result);
?>

<?php
echo 'Задача 12.1';
echo '<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
var_dump($arr);
?>

<?php
echo 'Задача 13.1 и 13.2';
echo '<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_rand($arr);
var_dump($keys);
echo '<br>';
$values = array_values($arr);
var_dump(array_rand($values));
?>


<?php
echo 'Задача 15.1';
echo '<br>';
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_unique($arr));
?>

<?php
echo 'Задача 16.1';
echo '<br>';
$arr = [1,2,3,4,5];
$arr2 = array_shift($arr); //Извлекает первый элемент массива
$arr3 = array_pop($arr); //Извлекает последний элемент массива
var_dump($arr2,$arr3);
?>

<?php
echo 'Задача 16.2';
echo '<br>';
$arr = [1,2,3,4,5];
$arr2 = array_unshift($arr,0); //Добавляет один или несколько элементов в начало массива
$arr3 = array_push($arr,6); //Добавляет один или несколько элементов в конец массива
var_dump($arr);
?>

<?php
echo 'Задача 17.1';
echo '<br>';
$arr = ['a','b','c'];
var_dump(array_pad($arr,6,'-')); //Дополнить массив определённым значением до указанной длины
?>

<?php
echo 'Задача 17.3';
echo '<br>';
$arr = range(1,20);
$result = array_chunk($arr,4); //Разбивает массив на части
var_dump($result);
?>

<?php
echo 'Задача 18.1';
echo '<br>';
$arr = ['a','b','c','b','a'];
var_dump(array_count_values($arr)); //Подсчитывает количество всех значений массива
?>

<?php
echo 'Задача 19.1';
echo '<br>';
$arr = [1,2,3,4,5];
$result = array_map('sqrt',$arr);
var_dump($result);
?>

<?php
echo 'Задача 19.2';
echo '<br>';
$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags',$arr); //Удаляет теги HTML и PHP из строки (strip_tags)
var_dump($result);
?>

<?php
echo 'Задача 19.3';
echo '<br>';
$arr = [' a ', ' b ', ' с '];
$result = array_map('trim',$arr);
var_dump($result);
?>

<?php
echo 'Задача 20.1 и 20.2';
echo '<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr1, $arr2); //Вычисляет схождение массивов
var_dump($result);
echo '<br>';
$result = array_diff($arr1,$arr2); //Вычислить расхождение массивов
var_dump($result);
?>

<?php
echo 'Доп задача 2';
echo '<br>';
$keys = range('a','z',1);
$values = range(1,26,1);
$result = array_combine($keys,$values); //Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений (array_combine)
var_dump($result);
?>

<?php
echo 'Доп задача 4';
echo '<br>';
$arr = [1,2,4,5,5];
var_dump(array_search(4,$arr));
?>
