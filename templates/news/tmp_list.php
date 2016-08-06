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
    <table class="numbering" style="width: 70%; text-align: center; ">
        <tr class="page" >
            <td style="width: 30%; text-align: right;">
                <?=$prew?>  
            </td>
            <td style="width: 40%; text-align: center;">
                <?=$one . $two . $three?>
            </td>
            <td style="width: 30%;  text-align: left;">
                <?=$next?>
            </td>
        </tr>
    </table>
<hr>

<?php     
    if($news != null) {
    foreach($news as $published) {
                    echo "<span id='login_published'>" . $published['login'].":" ."</span> ";
                    echo "<span id='title_published'>" . $published['title'] ."</span>";
                    echo "<span id='date_published'>" . $published['date'] ."</span><br>";

                    echo "<div id='title_text'>" . $published['text'] . '</div><br>';
         }
} ?>

</div>




<!--
<div id="Rsidebar"> 
    <span class="RsidebarInside"> новости, опубликованные в сети </span>
</div>
-->

<!--<div id="content"> -->
     
<?php //for($i=1; $i<=$totalPage; $i++) :?>
    <?php //if($i==($page+1)) :?>
            <?//=$i?>
    <?php// else :?>
<!--            <a href="/news/test/<?//=$i?>" > <?//=$i?> </a>
-->    <?php //endif; ?>
<?php //endfor;?>


    
<?php /*    
    if($news != null) {
    foreach($news as $published) {
                    echo "<span id='login_published'>" . $published['login'].":" ."</span> ";
                    echo "<span id='title_published'>" . $published['title'] ."</span><br>";
                    echo "<div id='title_text'>" . $published['text'] . '</div><br>';
         }
}*/
?>    
   <!-- if($news != null) {
    foreach ($news as $published) {
                    echo "<span id='title_published'>" . $published['title'] ."</span><br>";
                    echo "<div id='title_text'>" . $published['text'] . '</div><br>';
         }
}
-->
    
</div>


<?php /*if(!empty($query)): ?>     
    <?php if($page > 0): ?>
        <div style="width: 25%; float: left;">
            <a href="/news/list/<?=($page)?>"> &lt;- сюда</a>
            <?=($page)?>
        </div>
    <?php endif; ?>
    <div style="width: 50%; float: left; text-align: center;">
        ( <?=($page+1)?> / <?=$totalPages?> )
    </div>
    
    <?php if($page+2 <= $totalPages): ?>
        <div style="width: 25%; float: left; text-align: right;">
            <a href="/news/list/<?=($page+2)?>">туда -&gt;</a>
        </div>
    <?php endif; ?>
    <br/>
    <hr>
<?php else: ?>

Нету записей

<?php endif; ?>
*/