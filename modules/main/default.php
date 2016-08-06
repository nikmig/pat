<?php
//Создаем данные на вывод
//echo "hello it's /main/deafalt.php";

$data = [
    "YourName"=>$_PARAM[0],
    ];

unset($_SESSION["error_age"]);

//Вызываем функцию отображения
if(isset($_SESSION["id"])) {
    echo "Вы зарегистрированы, Ваш id=" . $_SESSION["id"];
    header("Location: /mine_page/page/");
    exit();
}

display();

/*
$error = "ошибка";
$int = 5;
$bool = true;

$rezult = compact("error", "int", "bool");
var_dump($rezult);*/