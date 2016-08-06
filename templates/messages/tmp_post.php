<div id="Lsidebar">       
   <?php 
        foreach($menu_Lsiderbar as $k => $menu_bar) {
            if(!empty($count) && $k == "defoult") {
                echo $menu_bar . "(" . $count[0]['count'] . ")";
            }else{
                echo $menu_bar;
            }
            echo "<br>";
        }
    ?>
</div>

<div id="content">
    <span > сообщение будет отправлено пользователю <b> <?=$login?> </b></span> <br><br>
    <form method="POST" action="/messages/post/<?=$id?>">
        <textarea name="message" id="textarea_message" name="message" size="60"></textarea><br><br>
        <input type="hidden" name="user_to" value='<?=$id?>'>
        <input type="submit" id="submit" name="send" value="отправить">
    </form>
    <hr>
    
    <?php foreach($mess as $message):?>
            <?php   if(!is_file(ROOT_PATH . "/static/image/" . $message['user_from'] . ".jpg")) {
                        $message['user_from'] = "ham";
                    }
                    if($_SESSION['id'] == $message['user_from']) {
                        $login_post = "Вы";
                    }else{
                        $login_post = $login;
                    }
            ?>
            <table border="0" style="width: 90%; text-align: center; ">
                <tr > 
                    <td colspan="2" style="text-align:right; font-size:small; color:blue;">
                        <?=$message['date']?>
                    </td>
                </tr>
                <tr >
                    <td style="width: 20%; text-align: left;"> <img id="foto_mess" src="/static/image/<?=$message['user_from']?>.jpg"> </td>
                    <td rowspan="2" style="width: 80%; text-align: left;"><?=$message['message']?></td>
                </tr>
                <tr> 
                    <td style="text-align:left;"><b><?=$message['login']?></b></td>
                </tr>
            </table>

    <?php endforeach?> 
</div>
