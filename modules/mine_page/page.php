<?php
guest();

$selection =   "SELECT * FROM information 
            WHERE `id` = '{$_SESSION['id']}'";
$info = select($selection);

$foto = ROOT_PATH . "/static/image/".$_SESSION['id'] .".jpg";

if(is_file($foto)) {
    $imgname = "/static/image/".$_SESSION['id'] .".jpg";
} else {
    $imgname = "/static/image/ham.jpg";
}


$query = select("SELECT * FROM `news` 
                WHERE  `user_id` = '{$_SESSION['id']}'
                ORDER BY `id` DESC");

display (compact("imgname", "query"), "mine_page/tmp_page.php");

