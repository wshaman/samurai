<?php echo $html->css( 'menu' ); ?>
<div class="menulist" align="center">
<?php
    foreach( $list as $val ){
        echo "<div class=\"menu\" align=\"center\">
                <div class=\"img\">{$html->image(DISH_IMAGES_URL.$val['image'],array( 'height'=>'90px'))}</div>
                <div class=\"name\">{$val['Dgroup']['name']}</div>
                <div class=\"descr\">{$val['Dgroup']['description']}</div>
                <div class=\"dishlist\" align=\"center\">";
                    foreach( $val['Dish'] as $dval ){
                        echo "<div class=\"dish\" align=\"center\">";
                        echo "<div class=\"img\">{$html->image(DISH_IMAGES_URL.$dval['image'],array( 'height'=>'90px'))}</div>";
                        echo "<div class=\"name\" align=\"center\">{$dval['name']}</div>";
                        echo "<div class=\"descr\">{$dval['description']}</div>";
                        echo "<input type=\"text\" id=\"num\" class=\"num\" name=\"num\" />";
                        echo "<input type=\"button\" class=\"put\" value=\"Добавить\"/>";
                        echo "</div>";
                    }
                echo" </div>
            </div>"; 
    }
?>
</div>
