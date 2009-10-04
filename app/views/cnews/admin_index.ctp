<?php
    echo $html->link( 'Добавить',
                array('controller'=>'cnews', 'action'=>'admin_new') );
    echo "<table border=\"1\" width=\"80%\">";
    foreach( $news as $d ){
        $d = $d['Cnew'];
        echo "<tr> <td>{$d['caption']}</td>";
        echo "<td>{$d['pre']}</td><td>";
        echo $html->image( NEWS_IMAGES_URL.$d['image'], array( 'height'=>'90px' ) ).'</td>';
        echo "<td>{$d['created']}</td> <td><a href=\"/admin/cnews/edit/".$d['id']."\">Изменить</a></td>
            <td>";
            echo $html->link('Удалить',
                array('controller'=>'cnews', 'action'=>'admin_delete', $d['id']),
                array(),
                "Действительно удалить?"
                );

            echo "</td></tr>";
    }
    echo "</table>";
?>
