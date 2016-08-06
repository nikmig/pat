<?php

if($_PARAM[0] == "user_error") {
    display([],  "view/tmp_error.php");
    exit();
}

$users = select("SELECT `login`, `email`, `id`
                FROM `information` ");

$count = select("SELECT COUNT(*) as `cont` FROM `information`");
$quantity = $count[0]['cont'];

/*if(!empty($_PARAM)) {
    $_SESSION['id'] = $_PARAM[0];
    unset($_PARAM);
    //header("Location: /mine_page/page/");
    exit();
}*/

display(compact("users", "quantity"), "users/tmp_roster.php");