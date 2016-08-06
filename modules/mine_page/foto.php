<?php
guest();

$imgname = "/static/image/".$_SESSION['id'] .".jpg";


if(isset($_POST['doUpload'])) {
    $data = $_FILES['myFile']['tmp_name'];
    $name = ROOT_PATH."/static/image".'/'.$_SESSION['id'] .'.jpg' ;
    if(file_exists($data)) {
        move_uploaded_file($data, $name);
        header("Location: /mine_page/page/");
        exit();
    } else {
        echo "ошибка закачки файла";
        //header("Location: /mine_page/foto/");
        exit();
    }
}

display(compact("imgname"), "mine_page/tmp_foto.php");
