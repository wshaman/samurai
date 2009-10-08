<?php



echo "<table border=\"1\" width=\"80%\">";
echo $html->tableHeaders(
     array('Автор','Сообщение','Дата','Ответ Самурая','Показывать?'),
     array('class' => 'admin_table_list'));
foreach( $par as $p ){
    $p = $p['Gbook'];
    $answer =  $html->link( empty( $p['answer']) ? 'Ответить' : $p['answer'],
                array('controller'=>'gbooks', 'action'=>'admin_edit', $p['id']) );
    echo '<tr>';
    echo "<td>{$p['author']}</td><td>{$p['text']}</td><td>{$p['created']}</td><td>{$answer}&nbsp;</td>";
    $publish = ( $p['publish'] ) ? 'Да' : 'Скрыть';
    echo "<td>{$publish}</td>";
    echo '</tr>';
}
echo '</table>';
?>
</div>
