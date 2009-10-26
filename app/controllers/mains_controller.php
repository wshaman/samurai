<?php
class MainsController extends AppController {
    var $uses = array( 'Dgroup', 'Cnew', 'Cart' );
    var $helpers = array('Html','Ajax','Javascript');

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

    function about(){

    }

}
?>
