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
    <?php foreach($mess as $message):?>
        <?php 
        $id_login = $message['user_from'];
        if(!is_file(ROOT_PATH . "/static/image/" . $message['user_from'] . ".jpg")) {
            $message['user_from'] = "ham";
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
                <td style="text-align:left;"><b> 
                    <a href='/messages/post/<?=$id_login?>'> <?=$message['login']?></a></b>
                </td>
            </tr>
        </table>
        <hr>
    <?php endforeach?>  
    
    
    
</div>