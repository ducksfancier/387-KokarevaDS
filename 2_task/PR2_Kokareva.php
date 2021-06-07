<?php
echo 'Задача 1.1';
echo '<br>';
echo strtoupper ('php'); 
?>

<?php
echo 'Задача 1.2';
echo '<br>';
echo strtolower ('PHP'); 
?>

<?php
echo 'Задача 1.3';
echo '<br>';
echo ucfirst ('london');
?>

<?php
echo 'Задание 1.4';
echo '<br>';
echo strtolower ('London'); 
?>

<?php
echo 'Задание 1.5';
echo '<br>';
$words = 'london is the capital of greate britane';
$words = ucwords($words);
echo $words;
?>

<?php
echo 'Задание 1.6';
echo '<br>';
echo ucfirst (strtolower ('LONDON')); 
?>

<?php
echo 'Задание 2.1';
echo '<br>';
echo strlen ('html css php'); 
?>

<?php
echo 'Задание 2.2';
echo '<br>';
$pass = '123314'; 
if (iconv_strlen($pass) > 5 && iconv_strlen($pass) < 10)
{ 
echo ('Пароль подходит');
} else {
echo ('Пароль не подходит');
}
?>

<?php
echo 'Задание 3.1';
echo '<br>';
$string = 'html css php';
echo  '<br>' . substr($string,0,4);
echo  '<br>' . substr($string,5,3);
echo  '<br>' . substr($string,-3,3);
?>

<?php
echo 'Задание 3.2';
echo '<br>';
$string = 'jfvkjdv';
echo '<br>' . substr($string,-3);
?>

<?php
echo 'Задание 3.3';
echo '<br>';
$str = 'http://jfbvkjdfbv';
if (substr($str,0,7) == "http://"){
    echo 'да';}
    else {
        echo 'нет';
}
?>

<?php
echo 'Задание 3.4';
echo '<br>'
    if (substr($str,0,7 ) == 'http://' || substr($str,0,8) == 'https://'){
        echo '<br>' . 'да';}
    else {echo  '<br>' . 'нет';}
?>

<?php
echo 'Задание 3.5';    
echo '<br>';
$string = 'jfvh.png';
if (substr($string,-4,4) == '.png'){
    echo '<br>' . 'да';
}
    else {echo '<br>' . 'нет';}
?>

<?php
echo 'Задание 3.6';
echo '<br>';
if (substr($string,-4,4) == '.png' || substr($string,-4,4) == '.jpg'){
    echo '<br>' . 'да';
}
    else {echo '<br>' . 'нет';}
?>

<?php
echo 'Задание 3.7';
echo '<br>';
$str = '123456'; 
if (strlen($str) > 5) {
    $new_str = substr($str, 0, 5) . '...';
    echo $new_str;
}
if (strlen($str) <= 5) {
    echo $str;
}
?>

<?php
echo 'Задание 4.1';
echo '<br>';
$str = ['31.12.2013'];    
var_dump(str_replace('.','-',$str));
?>

<?php
echo 'Задание 4.2';
echo '<br>';
$str = ['b','a','b','c','c'];    
var_dump(str_replace(['a','b','c'],[1,2,3],$str));
?>

<?php
echo 'Задание 4.3';
echo '<br>';
$str = ['1a2b3c4b5d6e7f8g9h0'];    
var_dump(str_replace([1,2,3,4,5,6,7,8,9,0],'',$str));
?>

<?php
echo 'Задание 5.1';
echo '<br>';
$str = ['b','a','c','b','c'];    
echo strtr('aabbc',['a'=>'1','b'=>'2','c'=>'3']);
?>

<?php
echo 'Задание 6.1';
echo '<br>';
echo substr_replace('bvkdfbv','!!!',2);   
?>

<?php
echo 'Задание 7.2';
echo '<br>';
$str =  "abc abc abc";
echo strrpos($str, 'b');
?>

<?php
echo 'Задание 7.3';
echo '<br>';
$str =  "abc abc abc";
echo strpos($str, 'b', 3);
?>

<?php
echo 'Задание 7.4';
echo '<br>';
echo strpos('aaa aaa aaa aaa aaa',' ',4);   
echo '<br>';
?>

<?php 
echo 'Задание 7.5';
echo '<br>';
$str = '..efefefefefe';
if (strpos($str, '..') !== false) {
	echo "есть";
} else {
	echo "нет";
};
?>

<?php 
echo 'Задание 7.6';
echo '<br>';
$str = 'http://djvkjdsb';
if (strpos($str, 'http://') === 0) {
	echo "да";
} else {
	echo "нет";
};
?>

<?php 
echo 'Задание 8.1';
echo '<br>';
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);
?>

<?php
echo 'Задание 8.2';
echo '<br>';
$arr = ['html', 'css', 'php'];
$str = implode(', ', $arr);
echo $str;
?>

<?php
echo 'Задание 8.3';
echo '<br>';
$date = '2013-12-31';
$arr = explode('-', $date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0];
$arr = array_reverse($arr);
$str = implode('.', $arr);
?>

<?php
echo 'Задание 9.1';
echo '<br>';
$str = '1234567890';
$arr = str_split($str, 2);
var_dump($arr);
?>

<?php
echo 'Задание 9.2';
echo '<br>';
$str = '1234567890';
$arr = str_split($str);
var_dump($arr);
?>

<?php
echo 'Задание 9.3';
echo '<br>';
$str = '1234567890';
$arr = str_split($str, 2);
echo implode('-', $arr);
?>

<?php
echo 'Задание 10.1';
echo '<br>';
<?php
$str = ' jscb djc ';
echo trim($str);
?>

<?php
echo 'Задание 10.2';
echo '<br>';
$str = '/php/';
echo trim($str, '/');
?>

<?php
echo 'Задание 10.3';
echo '<br>';
$str = 'слова слова слова.';
echo trim($str, '.').'.';
?>

<?php
echo 'Задание 11.1';
echo '<br>';
$str = '12345';
echo strrev($str);
?>

<?php
echo 'Задание 11.2';
echo '<br>';
$str = 'ohdjvc';
$exitStr = ($str == strrev($str)) ? 'является' : 'не является';
echo $exitStr;
?>

<?php
echo 'Задание 12.1';
echo '<br>';
$str = 'jdgckd';
echo str_shuffle($str);
?>

<?php
echo 'Задание 12.2';
echo '<br>';
$str = 'abcdefghijklmnopqrstuvwxyz';
$shuffle = str_shuffle($str);
echo substr($shuffle, 0, 6);
?>

<?php
echo 'Задание 13.1';
echo '<br>';
$str = '12345678';
echo number_format($str, 0, ',', ' ');
?>

<?php
echo 'Задание 14.1';
echo '<br>';
for ($i = 1; $i<10; $i++)
echo str_repeat('x', $i).'<br>';
?>

<?php
echo 'Задание 14.2';
echo '<br>';
for ($i = 1; $i<10; $i++)
echo str_repeat($i, $i).'<br>';
?>

<?php
echo 'Задание 15.1';
echo '<br>';
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
?>

<?php
echo 'Задание 16.1';
echo '<br>';
echo ord('a').'<br>';
echo ord('b').'<br>';
echo ord('c').'<br>';
echo ord(' ');
?>

<?php
echo 'Задание 16.3';
echo '<br>';
echo chr(33);
?>

<?php
echo 'Задание 17.1';
echo '<br>';
$str = 'ab-cd-ef';
echo strchr($str, '-');
?>

<?php
echo 'Задание 17.2';
echo '<br>';
$str = 'ab-cd-ef';
echo strrchr($str, '-');
?>

<?php
echo 'Задание 17.2';
echo '<br>';
