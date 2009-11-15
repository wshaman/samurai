<?php echo $html->css( 'menu' ); ?>
<?php echo $html->css( 'nyroModal' ); ?>

	<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.nyroModal-1.5.2.js"></script>
	<script type="text/javascript">
    jQuery.noConflict();
	//<![CDATA[
	$(function() {
		$.nyroModalSettings({
			debug: true,
			processHandler: function(settings) {
				var url = settings.url;
			},
		});
		
		function preloadImg(image) {
			var img = new Image();
			img.src = image;
		}
		
		preloadImg('/img/ajaxLoader.gif');
		preloadImg('/img/prev.gif');
		preloadImg('/img/next.gif');
		
	});
	
	//]]>
	</script>
</head>
<body>
<div class="menulist" align="center">
<?php
    foreach( $list as $val ){
        echo "<div class=\"menu\" align=\"center\">
                <div class=\"img\">{$html->image(DISH_IMAGES_URL.$val['image'].'_THUMB',array( 'height'=>'90px'))}</div>
                <div class=\"name\">{$val['Dgroup']['name']}</div>
                <div class=\"descr\">{$val['Dgroup']['description']}</div>
                <div class=\"dishlist\" align=\"center\">";
                    foreach( $val['Dish'] as $dval ){
                        echo "<div class=\"dish\" align=\"center\">";
                        echo "<div class=\"img\"><a class=\"nyroModal\" href=\"/Dishes/show/{$dval['id']}\">{$html->image(DISH_IMAGES_URL.$dval['image'].'_THUMB',array( 'height'=>'90px'))}</a></div>";
                        echo "<div class=\"name\" align=\"center\">{$dval['name']}</div>";
                        echo "<div class=\"descr\">{$dval['cost']}p./{$dval['weight']}гр.</div>";
//                        echo "<input type=\"text\" id=\"num\" class=\"num\" name=\"num\" />";
                        echo "<input type=\"button\" class=\"put\" value=\"Заказать\" onclick=\"javascript:{$ajax->remoteFunction( array( 'url' => array( 'controller' => 'orders', 'action' => 'ajax_cart', $dval['id'], 1, 0 ), 'update' => 'cart'))} \"/>";
                        if( $dval['cost_half']>0 ) {
                            echo "<div class=\"descr\">{$dval['cost_half']}p./{$dval['weight_half']}гр.</div>";
                            echo "<input type=\"button\" class=\"put\" value=\"Полпорции\" onclick=\"javascript:{$ajax->remoteFunction( array( 'url' => array( 'controller' => 'orders', 'action' => 'ajax_cart', $dval['id'], 1, 1 ), 'update' => 'cart'))} \"/>";
                        }
/* echo $ajax->link(
 'Добавить',
 array( 'controller' => 'menus', 'action' => 'ajax_cart', 1 ),
 array( 'update' => 'cart' )
 ); */
                        echo "</div>";
                    }
                echo" </div>
            </div>"; 
    }
?>
</div>
