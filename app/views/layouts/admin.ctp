<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/admin.css" />
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
</head>
<body style="background-color:e2bb59;">
<div class="admin_navigation">
<h2>Управление сайтом</h2>
<?php echo $html->link( 'Заказы', array( 'controller'=>'orders', 'action'=>'index') ); ?>&nbsp;
<?php echo $html->link( 'Меню', array( 'controller'=>'dgroups', 'action'=>'index') ); ?>&nbsp;
<?php echo $html->link( 'Новости', array( 'controller'=>'cnews', 'action'=>'index') ); ?>&nbsp;
<?php echo $html->link( 'Гостевая', array( 'controller'=>'gbooks', 'action'=>'index') ); ?>&nbsp;
</div>
<div id="header">
<!--div id="menu">...</div-->
</div>
<?php echo $content_for_layout ?>

<!--div id="footer">...</div-->
</body>
</html>
