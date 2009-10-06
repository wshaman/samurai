<?php
    echo "<table border=\"1\">";
    echo $form->create( 'Dish', array( 'action'=>"save/{$dish['id']}", 'type'=>'file' ) );
    echo "<tr><td>Название</td><td>". $form->input( 'name', array( 'value'=>$dish['name'], 'label'=>'' ) )."</td></tr>";
    echo $form->input( 'id', array( 'value'=>$dish['id'] ) );
    echo $form->input( 'dgroup_id', array( 'value'=>$dish['dgroup_id'] , 'type'=>'hidden' ) );
    echo "<tr><td>Описание</td><td>". $form->input( 'description', array( 'value'=>$dish['description'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Стоимость</td><td>". $form->input( 'cost', array( 'value'=>$dish['cost'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Масса</td><td>". $form->input( 'weight', array( 'value'=>$dish['weight'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Стоимость половины*</td><td>". $form->input( 'cost_half', array( 'value'=>$dish['cost_half'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Масса половины*</td><td>". $form->input( 'weight_half', array( 'value'=>$dish['weight_half'], 'label'=>'' ) )."</td></tr>";
    echo "<tr><td colspan=\"2\"><em>*Оставьте пустым, чтобы убрать возможность заказа половины порции</em><br/></td></tr>";
    echo "<tr><td>Выберите картинку</td><td>". $form->file('Dish.imagefile')."</td></tr>";
    echo "<tr><td>Текущее изображение</td><td>".$html->image(DISH_IMAGES_URL.$dish['image'],array( 'height'=>'90px'))."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
?>
