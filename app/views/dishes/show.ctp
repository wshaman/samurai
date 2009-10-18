<link rel="stylesheet" type="text/css" href="/css/popup.css" />
<div class="popup-total" align="center">
    <div class="popup-caption">
        <?php echo $dish['Dish']['name']; ?> 
    </div>
    <div class="popup-image">
        <img src="<?php echo '/img/'.DISH_IMAGES_URL.$dish['Dish']['image'];?>" />
    </div>
    <div class="popup-description">
        <?php echo $dish['Dish']['description']; ?> 
    </div>
<!--?php
    var_dump( $dish );
?-->
</div>
