<div id="Lsidebar">       
   <?php 
        foreach($menu_Lsiderbar as $menu_bar) {
            echo $menu_bar;
        }
    ?>
</div>

<div id="content">
    <span > сообщение будет отправлено пользователю <b> <?=$login?> </b></span> <br><br>
<form method="POST" action="/messages/view/">
    <textarea name="message" id="textarea" name="message" size="60"></textarea><br><br>
    <input type="hidden" name="user_to" value='<?=$id?>'>
    <input type="submit" id="submit" name="send" value="отправить">
    </form>
</div>