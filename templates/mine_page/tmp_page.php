<?php global $info?>
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


<div id="Rsidebar"> 
    <span class="RsidebarInside"> Здравствуй, <?php echo $info[0]['login'] ?> </span><br><br>
    <span class="RsidebarInside"> email: <?php echo $info[0]['email'] ?> </span><br><br>
    <span class="RsidebarInside"> именины: <?php echo $info[0]['age'] ?> </span><br><br>
    <center><img id="foto" src="<?php echo $imgname ?>"></center>
    
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
    
