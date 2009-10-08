<?php
    echo "<table border=\"1\">";
    echo $form->create( 'Gbook', array( 'action'=>"save") );
    echo "<tr><td>Ваше сообщение<br/>(вопрос, пожелание):</td><td>". $form->input( 'text', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Представьтесь:</td><td>". $form->input( 'author', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
?>
