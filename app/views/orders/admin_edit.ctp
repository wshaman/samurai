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
        <td>3.</td>
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
