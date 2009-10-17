<?php
    $html->link( 'Предыдущие заказы', array( 'controller' => 'orders', 'action' => 'prev' ) );

    echo "<table border=\"1\" width=\"80%\">";
    echo $html->tableHeaders(
         array('Дата','Имя','Адрес','Телефон'/*,'Соимость'*/),
         array('class' => 'admin_table_list'));
    foreach( $orders as $d ){
        $d = $d['Order'];
        echo "<tr> <td>";
        echo $html->link( $d['created'], array( 'controller'=>'orders', 'action'=>'admin_edit/'.$d['id'] ) );
        echo "</td><td>";
        echo $html->link( $d['name'], array( 'controller'=>'orders', 'action'=>'admin_edit/'.$d['id'] ) );
        echo "</td><td>";
        echo $html->link( $d['address'], array( 'controller'=>'orders', 'action'=>'admin_edit/'.$d['id'] ) );
        echo "</td><td>";
        echo $html->link( $d['phone'], array( 'controller'=>'orders', 'action'=>'admin_edit/'.$d['id'] ) );
        echo "</td></tr>";
    }
    echo "</table>";
?>
