<?php
    echo $form->create( 'Dgroup', array( 'action'=>"save/{$dgroup['id']}" ) );
    echo $form->input( 'name', array( 'value'=>$dgroup['name'], 'label'=>'Название:' ) );
    echo $form->input( 'id', array( 'value'=>$dgroup['id'] ) );
    echo $form->input( 'description', array( 'value'=>$dgroup['description'], 'label'=>'Описание:' ) );
    echo $form->input( 'show_on_main', array( 'checked'=>($dgroup['show_on_main'])?'checked':'', 'label'=>'Показывать в меню' ) );
    echo $form->end( 'Сохранить' );
?>
