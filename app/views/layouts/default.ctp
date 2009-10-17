<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<?php
    if( $javascript ){
        echo $javascript->link('prototype.js');
        echo $javascript->link('scriptaculous');
    }
?>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
</head>
<body>
<?php   $session->flash('auth'); ?>
<div class="global">
<div class="header">Head block</div>
<div class="content">
    <div class="left" align="center">
    <div class="inner"><h3>Заказ он-лайн</h3>Телефон доставки:<br/>XX-XX-XX</div>
    </div>
    <div class="right"><div class="inner"><h3>Корзина</h3></div><div id="cart">Cart will be here</div></div>
    <div class="main" align="center"><div class="menupart">
    <?php echo $html->link( 'Главная', array( 'controller'=>'Mains', 'action' => 'index'), array( 'class'=>'item_main' )  );
    echo "<span class=\"span_item\">".$html->link( 'Меню', array( 'controller'=>'Menus', 'action'=>'index'), array( 'class'=>'item_menu' ) )."</span>";
    echo $html->link( 'Архив новостей', array( 'controller'=>'Cnews', 'action'=>'archive'), array( 'class'=>'item_news' )  );
    echo $html->link( 'Гостевая', array( 'controller'=>'Gbooks', 'action'=>'index'), array( 'class'=>'item_gbook' )  );?>
    </div>
    <div class="middle" align="center">
    <NOSCRIPT><h1>Для нормальной работы сайта необходимо включить JavaScript в Вашем браузере</h1></NOSCRIPT>
    <?php echo $content_for_layout ?>
    </div>
    </div>
    </div>
</div>
<div class="footer"><br/>Shogun, 2009</div>
</div>

</body>
</html>
<script type="text/javascript">
    function onload(){
        <?php echo 
             $ajax->remoteFunction(
                 array(
                 'url' => array( 'controller' => 'orders', 'action' => 'ajax_cart', 0, 0 ),
                 'update' => 'cart'
                 )
             );
 ?>
    }
</script>
