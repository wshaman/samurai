<?php
    //var_dump( $order );
    $o = $order['Order'];
?>
<table>
    <tr>
        <td>1.</td>
        <td>Позвонить по номеру:</td>
        <td><?php echo $o['phone']; ?></td>
    </tr><tr>
        <td>2.</td>
        <td>Спросить:</td>
        <td><?php echo $o['name']; ?></td>
    </tr><tr>
    </tr><tr>
        <td>3.</td>
        <td>Уточнить адрес доставки:</td>
        <td><?php echo $o['address']; ?></td>
    </tr><tr>
    </tr><tr>
        <td>4.</td>
        <td>Уточнить заказ:</td>
        <td><?php 
                $cost = 0;
                echo '<ul>';
                foreach( $o['cart'] as $item){
                    if( isset( $item[0] ) && is_array( $item[0] ) ){
                        $st = $item[0]['cost']*$item[0]['num'];
                        echo "<li>{$item[0]['name']}, {$item[0]['num']}шт. по {$item[0]['cost']} = {$st}";
                        $cost += $st;
                    }
                    if( isset( $item[1] ) && is_array( $item[1] ) ){
                        $st = $item[1]['cost']*$item[1]['num'];
                        echo "<li>{$item[1]['name']}(1/2), {$item[1]['num']}шт. по {$item[1]['cost']} = {$st}";
                        $cost += $st;
                    }
                }
                echo '</ul> Итого: '.$st.'р.';
            ?>
        </td>
    </tr><tr>
        <td>5.</td>
        <td>Закрыть заказ:</td>
        <td><?php 
            echo $form->create( 'Orders', array( 'action'=>"edit/".$o['id']) );
            echo $form->input( 'status', array( 'type'=>'hidden', 'value'=>'closed' ) );
            echo $form->input( 'id', array( 'value'=>$o['id'], 'type' => 'hidden' ) );
            echo $form->end( 'Подтвердить' );
        ?>
        </td>
    </tr>
</table>
