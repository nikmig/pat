<?php

$selection =   "SELECT * FROM information 
            WHERE `id` = '{$_PARAM[0]}'";
$info = select($selection);

$foto = ROOT_PATH . "/static/image/".$_PARAM[0] .".jpg";

if(is_file($foto)) {
    $imgname = "/static/image/".$_PARAM[0] .".jpg";
} else {
    $imgname = "/static/image/ham.jpg";
}

$onPage = 4;

$page = $_PARAM[1]-1;
if($page < 0) {
    $page = 0;
}


$query = select("SELECT * FROM `news` 
                WHERE  `user_id` = '{$_PARAM[0]}'
                ORDER BY `id` DESC
                LIMIT " .($page*$onPage).", {$onPage}");
                
if(empty($query)) {
   header("Location: /users/roster/user_error/");
   exit();
}



display (compact("imgname", "query"), "view/tmp_about.php");

