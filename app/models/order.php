<?php
class Order extends AppModel {
//    var $hasMany='Cart';
//I think it should be better to serialize an array of cart,yeah.
 var $validate = array(
    'login' => VALID_NOT_EMPTY,
    'address' => VALID_NOT_EMPTY,
    'phone' => 'Numeric'
);
    function beforeSave(){
        $this->data['cart']=serialize( $this->data['cart'] );
        return true;
    }
}
?>
