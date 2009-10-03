<?php echo $html->css( 'styles' ); ?>
<div class="itemlist" align="center">
<?php
    foreach( $dgroups as $key =>$val ){
        echo "<div class=\"item\" align=\"center\">
                <div class=\"img\">{$html->image(DISH_IMAGES_URL.$val['image'],array( 'height'=>'90px'))}</div>
                <div class=\"name\">{$val['Dgroup']['name']}</div>
                <div class=\"descr\">{$val['Dgroup']['description']}</div>
            </div>"; 
//        echo "<div class=\"item\">{$html->image(DISH_IMAGES_URL.$val['image'])}{$val['Dgroup']['name']}</div>"; 
    }
?>
</div>
