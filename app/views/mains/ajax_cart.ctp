<div class="cart-content">
<?php
    if( !is_array( $cart ) )
        echo "<div class=\"emptycart\">{$html->link("Пусто!", array( 'controller'=>'menus', 'action'=>'index' ) )}</div>";
    else{
        echo "<table width=\"130px\">";
        foreach( $cart as $c )
            foreach( $c as $k => $i ){
            $half=( $k == 0 ) ? '': '(1/2)';
            if( $i['num'] > 0 )
            echo "<tr><td>+/-</td><td>{$i['num']}</td><td>{$i['name']}{$half}</td>";

        }
        echo "</table>";
    }
?>
</div>
