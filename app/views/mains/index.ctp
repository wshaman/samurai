<?php echo $html->css( 'index' ); ?>
<div class="itemlist" align="center">
<h2>Меню:</h2>
<?php
    foreach( $dgroups as $key =>$val ){
        $l = preg_replace( "/.*f=\"([^\"]+)\".*/i", "$1", $html->link( 'Меню', array( 'controller'=>'Menus', 'action'=>'index', 'id' => $val['Dgroup']['id']) ) );
        echo "<div class=\"item\" align=\"center\" onclick=\"document.location.href='{$l}'\">
                <div class=\"img\">{$html->image(DISH_IMAGES_URL.$val['image'].'_THUMB',array( 'height'=>'90px'))}</div>
                <div class=\"name\">{$val['Dgroup']['name']}</div>
                <div class=\"descr\">{$val['Dgroup']['description']}</div>
            </div>"; 
    } 
    echo "<div style=\"clear:both;\"></div> <h2>Новости:</h2>";
    foreach( $news as $key =>$val ){
//        $l = preg_replace( "/.*f=\"([^\"]+)\".*/i", "$1", $html->link( 'Меню', array( 'controller'=>'Menus', 'action'=>'mlist', 'id' => $val['Dgroup']['id']) ) );
        echo "<div class=\"newsitem\" align=\"center\" onclick=\"document.location.href='{$l}'\">
                <div class=\"img\">{$html->image(NEWS_IMAGES_URL.$val['Cnew']['image'].'_THUMB' ,array( 'height'=>'90px'))}</div>
                <div class=\"info\">
                    <div class=\"caption\">{$val['Cnew']['caption']}</div>
                    <div class=\"text\">{$val['Cnew']['pre']}</div>
                </div>
            </div>"; 
    } 
?>
</div>
