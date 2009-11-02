<?php
class Dish extends AppModel {
//    var $name = 'Dish';
//    var $useTable = 'dish';
    var $belongsTo = 'Dgroup';

    function beforeSave(){
        
        $this->prepareimg( 'Dish', 'imagefile' );
        var_dump( $this->lastFN );
        if( isset( $this->data['Dish']['imagefile'] ) ){
            if( !move_uploaded_file( $this->data['Dish']['imagefile']['tmp_name'], DISH_IMAGES.$this->lastFN )){
                echo("Не могу сохранить изображение! Обратитесь к разработчику. Он починит. Честно.");
            }else{
                $this->data['Dish']['image'] = $this->lastFN;
            }

        }
        return true;
    }

    function getAction(){
        return $this->find('all');
    }

    function getNameByID($id=NULL){
        if( is_null( $id )  ) return 'ничегошка';
        $this->unbindModel( 'Dgroup' );
        $r = $this->findById( (int) $id );
//        var_dump( $r );
        return $r['Dish']['name'];
    }
}
?>
