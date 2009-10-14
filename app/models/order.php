<?php
class Order extends AppModel {
//    var $hasMany='Cart';
//I think it should be better to serialize an array of cart,yeah.
/* var $validate = array(
    'login' => VALID_NOT_EMPTY,
    'address' => VALID_NOT_EMPTY,
    'phone' => 'Numeric'
);*/

    function afterFind( $results ){
//        var_dump( $results ); die;
        foreach( $results as $key => $val ){
            if( isset( $val['Order']['cart'] ) ){
                $results[$key]['Order']['cart'] = unserialize($results[$key]['Order']['cart']);
            }
        }
        return $results;
    }

    function beforeSave(){
//        var_dump( $this->data );die;
        return true;
    }
}
?>
