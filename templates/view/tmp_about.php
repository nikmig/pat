<?php global $info?>
<div id="Lsidebar">       
    <?php 
        foreach($menu_Lsiderbar as $menu_bar) {
            echo $menu_bar . "<br>" ;
        }
    ?>
</div>


<div id="Rsidebar"> 
    <span class="RsidebarInside"> Страница пользователя <?php echo $info[0]['login'] ?> </span><br><br>
    <span class="RsidebarInside"> email: <?php echo $info[0]['email'] ?> </span><br><br>
    <span class="RsidebarInside"> именины: <?php echo $info[0]['age'] ?> </span><br><br>
    <span> <?php if(($info[0]['last_online'] + ONLINE_TIME) > time() ) {
        echo "<span style='color:green'><b> online </b></span>" ;
    }else{
        echo "<span style='color:red'><b> offline </b></span>";
    }
    ?>
    
    <center><img id="foto" src="<?php echo $imgname ?>"></center><br>
    <span class="RsidebarInside"> <a class="RsidebarInside" href="/messages/post/<?=$info[0]['id']?>"> отправить сообщение </a></span>
    
</div>


<div id="content">
    <?php     
    if($query != null) {
    foreach($query as $published) {
                    echo "<span id='title_published'>" . $published['title'] ."</span><br>";
                    echo "<span id='date_published'>" . $published['date'] ."</span><br>";
                    echo "<div id='title_text'>" . $published['text'] . '</div><br>';
         }
    }
     ?>

</div>
    
