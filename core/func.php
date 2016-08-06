<?php
function isAuth() {
        return isset($_SESSION["id"]);
}

function guest() {
    global $db;
    if(!isAuth()) {
        header("Location: /");
        exit();
    }
    $db->query("UPDATE `information` SET  `last_online` = " . time() . "
                WHERE `id` = '{$_SESSION['id']}' ");
}

function select($arrow) {
    global $db;
    $out = [];
    $result = $db->query($arrow);
    if($result == false) {
    echo "не удалось получить данные ". $db-> error;
    exit();
    }
    while($res = $result->fetch_assoc()) {
        $out[] = $res;
    }

    return $out;
}
function select_stantard() {
    global $db;
    $result = $db->query("SELECT * FROM information 
            WHERE `id` = '{$_SESSION['id']}'");
    while($res = $result->fetch_assoc()) {
        $out[] = $res;
    }
    if($result == false) {
    echo "не удалось соедениться";
    exit();
    }
    return $out;
}
