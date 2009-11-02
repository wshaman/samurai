<?php echo $html->css( 'cnews' ); ?>
<div class="itemlist" align="center">
<?php
    foreach( $cnews as $cnew ){
        $cnew = $cnew['Cnew'];
         echo "<div class=\"newsitem\" align=\"center\" onclick=\"document.location.href='{$l}'\">
                <div class=\"img\">{$html->image(NEWS_IMAGES_URL.$cnew['image'].'_THUMB' ,array( 'height'=>'90px'))}</div>
                <div class=\"info\">
                    <div class=\"caption\">{$cnew['caption']}</div>
                    <div class=\"text\">{$cnew['pre']}</div>
                </div>
            </div>"; 
    } 
?>
</div>
