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
    <div class="RsidebarInside"> мои фото </div><br>
    <center><img id="foto" src="<?php echo $imgname ?>"></center>
</div>

<div id="content">   
    <form method="POST" enctype="multipart/form-data" >
        <input id="multipart" type="file" name="myFile"><br>
        <input id="submit" name="doUpload" type="submit" >
    </form>
</div>

     
   
</div> 
