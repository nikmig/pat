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
    <?php
        echo $user_error;
        echo "<table>";
        for ($i=0; $i<$quantity; $i++) {
            $login =  $users[$i]['login'] ; 
            $email =  $users[$i]['email']  ;
            $about = $users[$i]['id'];
            $message = "<a href='/messages/post/{$users[$i]['id']}'>".  "&#9997;</a>" ;
            if(!is_file(ROOT_PATH . "/static/image/" . $users[$i]['id'] . ".jpg")) {
                $users[$i]['id'] = "ham";
            }
            echo "<a href='/view/about/{$about}'>";
            echo "<tr>";
                echo "<td > <img id='td_foto' src='/static/image/" . $users[$i]['id'] . ".jpg'></td>";
                echo "<td id='td_login' >" . "<a href='/view/about/{$about}'>" . $login . "</a></td>";
                echo "<td id='td_email'>" .  $email . "</td>";
                //echo "<td id='td_id'>" .  $id . "</td>";
                echo "<td id='td_message' >" .  $message . "</a></td>";
            echo "</tr>";
            
            }
        echo "</table>";
?>
</div>
