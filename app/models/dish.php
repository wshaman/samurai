<?php
class Dish extends AppModel {
//    var $name = 'Dish';
//    var $useTable = 'dish';
    var $belongsTo = 'Dgroup';
    var $lastFN = '';
    function beforeSave(){
        $fname = md5( microtime().mt_rand() );
        $this->lastFN = $fname;
        if( isset( $this->data['Dish']['imagefile'] ) ){
            if( !move_uploaded_file( $this->data['Dish']['imagefile']['tmp_name'], DISH_IMAGES.$fname )){
                echo("RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR");
            }else{
                $this->data['Dish']['image'] = $fname;
            }

        }
        return true;
    }

    function getLastFileName(){
        return $this->lastFN;
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
