<?php

function display($data=[], $customTemplate=NULL) {
     global $menu_Lsiderbar;
    //Автоматически генерируем путь к шаблону
    $templatePath = ROOT_PATH."/templates/".MODULE."/tmp_".METHOD.".php";
    //Если задан втарой аргумент
    //подключаем шаблон по заданому пути
    if(!is_null($customTemplate)) {
        $templatePath = ROOT_PATH."/templates/".$customTemplate;
    }
    
   
    $count = select("SELECT COUNT(*) as count FROM `dialog`
                     WHERE `readed` = 0 AND `user_to` = '{$_SESSION['id']}'");

    
    extract($data);
    include(ROOT_PATH."/templates/header.php");
    include($templatePath);
    include(ROOT_PATH."/templates/footer.php");

    exit();
}