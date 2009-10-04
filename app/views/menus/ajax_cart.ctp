<?php
    if( !is_array( $cart ) )
        echo "<div class=\"emptycart\">{$html->link("Пусто!", array( 'controller'=>'menus', 'action'=>'mlist' ) )}</div>";
    else{
        var_dump( $cart );
    }
?>
