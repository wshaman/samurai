<?php
    echo $form->create( 'Cnew', array( 'action'=>"save/{$cnew['id']}", 'type' => 'file' ) );
    echo $form->input( 'caption', array( 'value'=>$cnew['caption'], 'label'=>'Заголовок:' ) );
    echo $form->input( 'id', array( 'value'=>$cnew['id'] ) );
    echo $form->input( 'pre', array( 'value'=>$cnew['pre'], 'label'=>'Анонс:' ) );
    echo $form->input( 'text', array( 'value'=>$cnew['text'], 'label'=>'Текст:' ) );
    echo 'Выберите картинку:<br/>';
    echo $form->file('Cnew.imagefile');
    echo $form->end( 'Сохранить' );
?>
