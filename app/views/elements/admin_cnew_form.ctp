<?php
    echo "<table border=\"1\">";
    echo $form->create( 'Cnew', array( 'action'=>"save/{$cnew['id']}", 'type' => 'file' ) );
    echo "<tr><td>Заголовок</td><td>". $form->input( 'caption', array( 'value'=>$cnew['caption'], 'label'=>'' ) )."</td></tr>";
    echo $form->input( 'id', array( 'value'=>$cnew['id'] ) );
    echo "<tr><td>Анонс</td><td>". $form->input( 'pre', array( 'value'=>$cnew['pre'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Текст</td><td>". $form->input( 'text', array( 'value'=>$cnew['text'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Выберите картинку</td><td>". $form->file('Cnew.imagefile')."</td></tr>";
    echo "<tr><td>Текущее изображение</td><td>".$html->image(NEWS_IMAGES_URL.$cnew['image'],array( 'height'=>'90px'))."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
?>
