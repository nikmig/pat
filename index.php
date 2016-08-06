<?php

// ROOT_PATH == /home/ubuntu/workspace
session_start();
define("ROOT_PATH", realpath("."));
define("ONLINE_TIME" , 120);

//Подключаем обработку путей и подключаем необходимый модуль
include ROOT_PATH.'/core/route.php';
//Подключаем нашу библиотеку для обработки шаблонов
include ROOT_PATH.'/core/db.php';

include ROOT_PATH.'/core/func.php';

include ROOT_PATH.'/core/arrow.php';


$fullMethodPath = ROOT_PATH."/modules/".MODULE."/".METHOD.".php";


include ROOT_PATH.'/core/template.php';

// ROOT_PATH == /home/ubuntu/workspace/
   //  /home/ubuntu/workspace/modules/main/default.phpэто фул метод паз c Index.php 
//echo $fullMethodPath . " это фул метод паз c Index.php <br>";

if(!file_exists($fullMethodPath)) {
    exit("Метод ".METHOD." не существует в модуле ".MODULE);
}

//Подключаем необходимый модуль 
include($fullMethodPath);

exit();