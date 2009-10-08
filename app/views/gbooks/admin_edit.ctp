<?php
    $par = $par['Gbook'];    
    echo "<table border=\"1\">";
    echo $form->create( 'Gbook', array( 'action'=>"save" ) );
    echo $form->input( 'id', array( 'value'=>$par['id'] ) );
    echo "<tr><td>Сообщение <br/><em>{$par['author']}</em>:</td><td>{$par['text']}</td></tr>";
    echo "<tr><td>Ответ Самурая:</td><td>". $form->input( 'answer', array( 'value'=>$par['answer'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Показывать</td><td>". $form->input( 'publish', array( 'checked'=>($par['publish'])?'checked':'', 'label'=>'' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";

?>
