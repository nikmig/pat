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
    <span class="RsidebarInside"> <?php echo $info[0]['login'] ?>, поделись новостью) </span>
    
    
</div>


<div id="content"> 
     <form method="post" action="/news/post/" >   
            <br><span id="text"> заголовок <input size="57" type="text" name="title" ></span>
            <br><br><span id="text"> текст </span><br>
            <textarea id="textarea" name="text" size="60"></textarea><br><br>
            <input type="submit" id="submit" name="publish" value="публиковать">
            
    </form> 
</div>
    
