<?php
    echo "<table border=\"1\">";
    echo $form->create( 'user', array( 'action'=>'login', 'type' => 'file' ) );
    echo "<tr><td>Логин</td><td>". $form->input( 'username', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Пароль</td><td>". $form->input( 'password', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
?>
