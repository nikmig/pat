<?php
if(isset($_SESSION['id'])) {
    header("Location: /mine_page/page");
    exit();
}
if(!empty($_POST)) {
    unset($_SESSION["error_age"]); 
    if(strtotime($_POST["age"]) == FALSE) {
        $_SESSION["error_age"]="введен неверный формат";
        header("Location: /auth/registration");
        exit();
    } else {
        preg_match('{\d\d\d\d-\d\d-\d\d}', $_POST["age"], $preg_date);
        $data = $preg_date[0];
        if($data != null) {
            $bithday = date("Y-m-d", strtotime($data));
        } else {
            $_SESSION["error_age"]="введен неверный формат";
            header("Location: /auth/registration");
            exit();
        }

    $isOk = $db->query("INSERT INTO `information` SET
                        `login` = '{$_POST['login']}' , `surname` = '{$_POST['surname']}' ,
                        `sex` = '{$_POST['sex']}',      `age` = '$bithday' ,
                        `email` = '{$_POST['email']}' , `country` = '{$_POST['country']}' ,  
                        `city` = '{$_POST['city']}' ,   `password` = '{$_POST['password']}' " );
    $id = mysqli_insert_id($db);
}}

if(isset($isOk)) {
        if($isOk == true) {
                $_SESSION['id'] = $id; 
                header("Location: /mine_page/page");
        } else {
                echo "Не получилось зарегистрироваться";
                exit();
        }
}
// ["auth" => "UserIsAuth"]
// $auth => "UserIsAuth";


display([], "auth/tmp_registration.php");