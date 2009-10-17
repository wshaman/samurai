<?php
    $cost=0.00;
    echo "<table width=\"130px\">";
    foreach( $cart as $c )
        foreach( $c as $k => $i ){
        $half=( $k == 0 ) ? '': '(1/2)';
        if( $i['num'] > 0 ){
            $ci = $i['cost']*$i['num'];
            $cost += $ci;
            echo "<tr><td>{$i['num']}</td><td>{$i['name']}{$half}</td><td><em>{$ci}р</em></td></tr>";
        }
    }
    echo "<tr><td colspan=\"2\">Итого:</td><td>{$cost}р</td></tr>";
    echo "</table>";
    echo "<table width=\"130px\">";
    echo $form->create( 'Orders', array( 'action'=>'index') );

    echo "<tr><td>Ваше имя</td><td>". $form->input( 'name', array(  'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Адрес доставки</td><td>". $form->input( 'address', array(  'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Контактный телефон*</td><td>". $form->input( 'phone', array(  'label'=>'', 'error'=>'Укажите номер телефона, состоящий только из цифр' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Подтвердить' )."</td></tr>";
    echo "</table>";
    echo '<div class="note">*Для подтверждения заказа с Вами свяжутся в ближайшее время по указанному номеру</div>';


?>
