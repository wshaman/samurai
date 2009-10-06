<?php
    echo "<table border=\"1\">";
    echo $form->create( 'Dgroup', array( 'action'=>"save/{$dgroup['id']}" ) );
    echo "<tr><td>Название</td><td>". $form->input( 'name', array( 'value'=>$dgroup['name'], 'label'=>'' ) )."</td></tr>";
    echo $form->input( 'id', array( 'value'=>$dgroup['id'] ) );
    echo "<tr><td>Описание</td><td>". $form->input( 'description', array( 'value'=>$dgroup['description'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Показывать в меню</td><td>". $form->input( 'show_on_main', array( 'checked'=>($dgroup['show_on_main'])?'checked':'', 'label'=>'' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
?>
