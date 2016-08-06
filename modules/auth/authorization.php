<?php

$result_set = $db->query("SELECT * FROM information 
                            WHERE `login` = '{$_POST['login']}'
                            AND `password` = '{$_POST['password']}'");
$data = $result_set->fetch_assoc();

unset($_SESSION["error_age"]);

if($data != null) {
    $_SESSION['id'] = $data['id'];
    header("Location: /mine_page/page");
} else {
    display([], "auth/tmp_authorization.php");
    exit();
}


