<?php
class Dgroup extends AppModel {
    //var $name = 'Dgroup';
//    var $useTable = 'dgroup';
    var $hasMany = 'Dish';

    function afterFind( $results ){
        foreach ($results as $key => $val) {
            if( isset( $val['Dish'] ) && count( $val['Dish'] > 0 ) )
            $results[$key]['image'] = $val['Dish'][0]['image'];
        }
//        var_dump( $results );die;
        return $results;
    }
    function get1(){
        return $this->find( 'all' );
    }
}
?>
