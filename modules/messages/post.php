<?php

$info = select("SELECT * FROM `information`
                WHERE `id` = '{$_PARAM['0']}' ");

$id = $_PARAM['0'];
$login = $info['0']['login'];

if(empty($login)) {
    $login = "<a href='/users/roster/'> -- выберите пользователя --</a>";
}

if(isset($_POST['send'])) {
    $req =  $db -> query ("INSERT INTO `dialog` SET
                           `user_to` = '{$_POST['user_to']}', `user_from` = '{$_SESSION['id']}', 
                           `message` = '{$_POST['message']}', `date` = NOW()");
} else {
    //echo "сообщение не отправлено, попробуйте еще раз";
}

/*$mess = select("SELECT * FROM `dialog`
                WHERE(`user_from` = '{$_SESSION['id']}' AND `user_to` = '{$_PARAM['0']}')
                OR (`user_from` = '{$_PARAM['0']}' AND `user_to` = '{$_SESSION['id']}')   
                ORDER BY date DESC");*/
                
$mess = select("SELECT `dialog`.* , `information`.`login`
                FROM `dialog` 
                LEFT JOIN `information` ON `information`.`id` = `dialog`.`user_from`
                WHERE(`user_from` = '{$_SESSION['id']}' AND `user_to` = '{$_PARAM['0']}')
                OR (`user_from` = '{$_PARAM['0']}' AND `user_to` = '{$_SESSION['id']}')   
                ORDER BY date DESC");
                
$db->query("UPDATE `dialog`
            SET `readed` = 1 
            WHERE `user_to` = '{$_SESSION['id']}'
            AND `user_from` = '{$_PARAM['0']}'
            AND `readed` = 0  ");
//print_r($mess);

display (compact("login", "id", "mess"), "/messages/tmp_post.php");
?>
