<?php
    echo $html->link( 'Добавить',
                array('controller'=>'dgroups', 'action'=>'admin_new') );
    echo "<table border=\"1\" width=\"80%\">";
    foreach( $dgroups as $d ){
        $d = $d['Dgroup'];
        echo "<tr> <td>";
        echo $html->link( $d["name"], array( 'controller'=>'dishes', 'action'=>'admin_index/'.$d['id'] ) );
        echo "</td> <td><a href=\"/admin/dgroups/edit/".$d['id']."\">Изменить</a></td>
            <td>";
            echo $html->link('Удалить',
                array('controller'=>'dgroups', 'action'=>'admin_delete', $d['id']),
                array(),
                "Действительно удалить?"
                );

            echo "</td></tr>";
    }
    echo "</table>";
?>
