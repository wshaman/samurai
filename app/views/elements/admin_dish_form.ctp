<?php
    echo $form->create( 'Dish', array( 'action'=>"save/{$dish['id']}", 'type'=>'file' ) );
    echo $form->input( 'name', array( 'value'=>$dish['name'], 'label'=>'Название:' ) );
    echo $form->input( 'id', array( 'value'=>$dish['id'] ) );
    echo $form->input( 'dgroup_id', array( 'value'=>$dish['dgroup_id'] , 'type'=>'hidden' ) );
    echo $form->input( 'description', array( 'value'=>$dish['description'], 'label'=>'Описание:' ) );
    echo 'Выберите картинку:<br/>';
    echo $form->file('Dish.imagefile');
    echo $form->end( 'Сохранить' );
?>
