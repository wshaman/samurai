<?php
    echo $html->link( 'Добавить',
                array('controller'=>'dishes', 'action'=>'admin_new', $dgroups_id) );
    echo "<table border=\"1\" width=\"80%\">";
     echo $html->tableHeaders(
         array('Название','Описание','Цена/Вес порции','Цена/Вес половины','Изображение','Удалить'),
         array('class' => 'admin_table_list'));
    foreach( $dishes as $d ){
        $d = $d['Dish'];
        echo "<tr> <td>";
        echo $html->link( $d['name'], array( 'controller'=>'dishes', 'action'=>'admin_edit/'.$d['id'] ) );
        echo "</td><td>{$d['description']}</td>";
        echo "<td>{$d['cost']}р/{$d['weight']}гр</td>";
        echo "<td>{$d['cost_half']}р/{$d['weight_half']}гр</td>";
        echo "<td>{$d['image']}</td><td>";
            echo $html->link('Удалить',
                array('controller'=>'dishes', 'action'=>'admin_delete', $d['id']),
                array(),
                "Действительно удалить?"
                );

            echo "</td></tr>";
    }
    echo "</table>";
?>
