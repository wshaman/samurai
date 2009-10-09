<?php
    echo "<table border=\"1\">";
    echo $form->create( 'User', array( 'action'=>'login', 'type' => 'file' ) );
    echo "<tr><td>Логин</td><td>". $form->input( 'username', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td>Пароль</td><td>". $form->input( 'password', array( 'label'=>'' ) )."</td></tr>";
    echo "<tr><td></td><td>". $form->end( 'Сохранить' )."</td></tr>";
    echo "</table>";
/*
echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $form->input('User.username');
echo $form->input('User.password');
echo $form->end('Login');*/
?>
