<?php

//Получаем всё что после домена в адресной строке  
$path = $_SERVER['REQUEST_URI'];

$path = str_replace("?".$_SERVER['QUERY_STRING'], "", $path);

//Разбиваем стрoку по слешам на массив
$pathArray = explode("/", $path);
//Удаляем первый элемент с массива

$pathArray = array_slice($pathArray, 1);

//Проверяем наличие заданого модуля 
if($pathArray[0] == "") {
    $pathArray[0] = "main";
}
if($pathArray[1] == "") {
    $pathArray[1] = "default";
}

//Определяем константы для удобной работы
define("MODULE", $pathArray[0]);
define("METHOD", $pathArray[1]);


//Все параметры, что идут после метода
$_PARAM = array_slice($pathArray, 2);

