<?php
class OrdersController extends AppController {
    //var $uses = array( 'Dgroup', 'Cnew', 'Cart' );
    var $uses = array( 'Dgroup', 'Cnew', 'Dish', 'Order' );
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );

    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allowedActions = array('index', 'ajax_cart');
    }


    function admin_index(){
        $this->layout="admin";
        $this->set( 'orders', $this->Order->findAllByStatus( 'open' ) );
    }

    function admin_edit( $id=NULL ){
        if( !isset( $this->data ) ){
            $this->layout="admin";
            $this->set( 'order', $this->Order->findById( (int)$id ) );
        } else {
            $this->data= $this->data['Orders'];
            $this->Order->save( $this->data );
            $this->flash( 'Заказ закрыт!', '/admin/orders/' );
        }
    }

    function afterFilter(){
        if($this->RequestHandler->isAjax()){
            Configure::write('debug', 0);// and forget debug messages
            $this->layout = 'ajax'; //or try with $this->layout = '';
            }
        parent::afterFilter();
    }


    function ajax_cart( $trade_id=NULL, $trade_num=1, $half=0 ){
        if( $trade_id == -1 ){
            if( $this->Session->check( 'cart' ) )
                $this->Session->del( 'cart' );
        }
        $cart = $this->Session->read( 'cart' );
        if( $trade_id > 0 ){
            if( isset( $cart[$trade_id][$half] ) ){
                $cart[$trade_id][$half]['num'] += $trade_num;
            } else 
                $cart[$trade_id][$half]['num'] = $trade_num;
            $item = $this->Dish->findById( (int) $trade_id );
            $cart[$trade_id][$half]['cost'] = ( $half == 1 ) ? $item['Dish']['cost_half'] : $item['Dish']['cost'];
           $cart[$trade_id][$half]['name'] = $item['Dish']['name'];//$this->Dish->getNameByID( $trade_id );
            $this->Session->write( 'cart', $cart );
        }
        $this->set( 'cart', $cart );
    }

    function index(){
        if( !isset( $this->data ) ){
            if( !$this->Session->check( 'cart' ) ){
                $this->flash( 'Корзика пуста!', $this->referer() );
            }
            $this->set( 'cart', $cart = $this->Session->read( 'cart' ) );
        } else {
//            var_dump( $this->data );
            $this->data['Orders']['cart']=serialize($this->Session->read( 'cart' ));
            $this->data['Order']=$this->data['Orders']; 
//            var_dump( $this->data ); die;
            //$this->data['Orders']['cart']=serialize( $this->data['Orders']['cart'] );
            $this->Order->save( $this->data );
            $message="Новый заказ получен!";
            $to="maksim_vikulov@bk.ru";
            $subj="Новый заказ!";
            mail( $to, $subj, $message );
            $this->Session->del( 'cart' );
            $this->flash( "Ваш заказ поступил в обработку, скоро Вам перезвонят по указанному номеру", '/Mains/' );
        }
    }
}
?>
