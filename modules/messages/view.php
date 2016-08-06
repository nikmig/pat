<?php

$info = select ("SELECT * FROM `information`
                WHERE `id` = '{$_PARAM['0']}' ");
//print_r($info);
$id = $_PARAM['0'];
$login = $info['0']['login'];
//print_r($login);
//print_r($_POST);
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


    
display (compact("login", "id"), "/messages/tmp_view.php");
?>