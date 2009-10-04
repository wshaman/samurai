<?php
class MenusController extends AppController {
    //var $uses = array( 'Dgroup', 'Cnew', 'Cart' );
    var $uses = array( 'Dgroup', 'Cnew' );
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );

    function index(){
        $this->set( 'dgroups', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        $this->set( 'news', $this->Cnew->getRecent() );
    }

    function beforeFilter(){
        if($this->RequestHandler->isAjax()){
            Configure::write('debug', 0);// and forget debug messages
            $this->layout = 'ajax'; //or try with $this->layout = '';
            }
        parent::beforeFilter();
    }

    function mlist( $id=NULL ){
        if( is_null( $id ) )
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        else 
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1', 'id'=>(int) $id)) ));

    }

    function ajax_cart( $trade_id=NULL, $trade_num=NULL ){
        $cart = ( isset( $_SESSION['cart'] ) ) ? $_SESSION['cart'] : 'empty';
        $this->set( 'cart', $cart );
    }
}
?>
