<h2>Управление сайтом</h2>
<ul>
<li><?php echo $html->link( 'Заказы', array( 'controller'=>'orders', 'action'=>'index') ); ?></li>
<li><?php echo $html->link( 'Меню', array( 'controller'=>'dgroups', 'action'=>'index') ); ?></li>
<li><?php echo $html->link( 'Новости', array( 'controller'=>'cnews', 'action'=>'index') ); ?></li>
<li><?php echo $html->link( 'Гостевая', array( 'controller'=>'gbooks', 'action'=>'index') ); ?></li>
</ul>
