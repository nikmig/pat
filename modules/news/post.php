<?php
guest();


$poyas = '+3'; 
$date = gmdate("d/M/Y H:i", time()+($poyas*3600));
if(isset($_POST['publish'])) {
$news = $db->query("INSERT INTO `news` SET
                        `user_id` = '{$_SESSION['id']}' , `date` = '{$date}',
                        `title` = '{$_POST['title']}' , `text` = '{$_POST['text']}' " );
}
$info = select_stantard();

if(isset($news)) {
              if($news == true) {
              header("Location: /mine_page/page");
        } else {
            $msg = "Не получилось соедениться";
                display ($msg, "news/tmp_list.php");
                exit();
        }
}

display (compact("info"), "news/tmp_post.php");








