<?php
class Dish extends AppModel {
    var $name = 'dishes';
    function beforeSave(){
//        echo DISH_IMAGES."<br/>";
        $fname = md5( microtime().mt_rand() );
        if( isset( $this->data['Dish']['imagefile'] ) ){
            var_dump( $this->data['Dish']['imagefile'], DISH_IMAGES.$fname );
            if( !move_uploaded_file( $this->data['Dish']['imagefile']['tmp_name'], DISH_IMAGES.$fname )){
                echo("RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR");
            }else{
                $this->data['Dish']['image'] = $fname;
            }

        }
//        var_dump( $this->data );
        return true;
    }
}
?>
