<?php
class MenusController extends AppController {
    //var $uses = array( 'Dgroup', 'Cnew', 'Cart' );
    var $uses = array( 'Dgroup' );
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );


    function beforeFilter() {
        parent::beforeFilter();
//        $this->Auth->allowedActions = array('index');
    }

    function index( $id=NULL ){
        if( is_null( $id ) )
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        else 
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1', 'id'=>(int) $id)) ));
    }


/*    function mlist( $id=NULL ){
        $this->redirect( 
    }
*/
}
?>
