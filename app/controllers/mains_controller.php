<?php
class MainsController extends AppController {
    //var $uses = array( 'Dgroup', 'Cnew', 'Cart' );
    var $uses = array( 'Dgroup', 'Cnew', 'Dish' );
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );

    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allowedActions = array('index', 'ajax_cart');
    }

    function index(){
        $this->set( 'dgroups', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        $this->set( 'news', $this->Cnew->getRecent() );
    }

    function admin_index(){
        $this->layout="admin";

    }

    function afterFilter(){
        if($this->RequestHandler->isAjax()){
            Configure::write('debug', 0);// and forget debug messages
            $this->layout = 'ajax'; //or try with $this->layout = '';
            }
        parent::afterFilter();
    }


    function ajax_cart( $trade_id=NULL, $trade_num=1, $half=0 ){
        $cart = $this->Session->read( 'cart' );
        if( $trade_id > 0 ){
            if( isset( $cart[$trade_id][$half] ) ){
                $cart[$trade_id][$half]['num'] += $trade_num;   
            } else 
                $cart[$trade_id][$half]['num'] = $trade_num;   
            $cart[$trade_id][$half]['name'] = $this->Dish->getNameByID( $trade_id );
            $this->Session->write( 'cart', $cart );
        }
        $this->set( 'cart', $cart );
    }
}
?>
