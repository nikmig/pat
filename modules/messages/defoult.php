<?php

$mess = select("SELECT * FROM `dialog`
                WHERE `user_to` = '{$_SESSION['id']}'");


$info = select("SELECT `id`, `login` 
                FROM `information`");

$i=0;
foreach($mess as $message) {
        foreach($info as $inform) {
            if($message['user_from'] == $inform['id']) {
                $mess[$i]['login'] = $inform['login'];
                }
        }
        $i++;
}


display (compact("mess", "id", "count"), "/messages/tmp_defoult.php");
