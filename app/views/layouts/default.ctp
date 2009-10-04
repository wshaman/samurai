<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
</head>
<body>
<div class="header">Head block</div>
<div class="content">
<div class="left">
<?php echo $html->link( 'Главная', array( 'controller'=>'Menus', 'action' => 'index') );?><br/>
<?php echo $html->link( 'Меню', array( 'controller'=>'Menus', 'action'=>'mlist') );?><br/>
<?php echo $html->link( 'Архив новостей', array( 'controller'=>'Cnews', 'action'=>'archive') );?>
</div>
<div class="right"><div class="cart">Cart will be here</div></div>
<div class="main" align="center"><div class="menupart">Menu</div>
<?php echo $content_for_layout ?>
</div>
</div>

<!--div id="footer">...</div-->
</body>
</html>
