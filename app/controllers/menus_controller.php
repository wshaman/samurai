<?php
class MenusController extends AppController {
//    var $name = 'Menu';
//    var $uses = array();
    var $uses = array( 'Dgroup', 'Cnew' );

    function index(){
//        $this->loadModel( 'Dish' );   
        $this->set( 'dgroups', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        $this->set( 'news', $this->Cnew->getRecent() );
    }

    function mlist( $id=NULL ){
        if( is_null( $id ) )
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
        else 
            $this->set( 'list', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1', 'id'=>(int) $id)) ));

    }
}
?>
