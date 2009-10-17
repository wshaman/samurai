<div class="cart-content">
<?php
    if( !is_array( $cart ) )
        echo "<div class=\"emptycart\">{$html->link("Пусто!", array( 'controller'=>'menus', 'action'=>'index' ) )}</div>";
    else{
        $cost=0.00;
        echo "<table width=\"130px\">";
        foreach( $cart as $c )
            foreach( $c as $k => $i ){
            $half=( $k == 0 ) ? '': '(1/2)';
            if( $i['num'] > 0 ){
                $ci = $i['cost']*$i['num'];
                $cost += $ci;
                echo "<tr><td>+/-</td><td>{$i['num']}</td><td>{$i['name']}{$half}</td><td><em>{$ci}р</em></td></tr>";
            }
        }
        echo "<tr><td colspan=\"3\">{$html->link( "Заказать ".$cost, array( 'controller'=>'orders', 'action'=>'index' ) )}</td></tr>";
        echo "</table>";
    }
?>
</div>
