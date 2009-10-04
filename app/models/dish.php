<?php
class Dish extends AppModel {
//    var $name = 'Dish';
//    var $useTable = 'dish';
    var $belongsTo = 'Dgroup';
    function beforeSave(){
        $fname = md5( microtime().mt_rand() );
        if( isset( $this->data['Dish']['imagefile'] ) ){
//            var_dump( $this->data['Dish']['imagefile'], DISH_IMAGES.$fname );
            if( !move_uploaded_file( $this->data['Dish']['imagefile']['tmp_name'], DISH_IMAGES.$fname )){
                echo("RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR");
            }else{
                $this->data['Dish']['image'] = $fname;
            }

        }
        return true;
    }

    function getAction(){
        return $this->find('all');
    }
}
?>
