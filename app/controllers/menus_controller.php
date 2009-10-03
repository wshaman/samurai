<?php
class MenusController extends AppController {
//    var $name = 'Menu';
//    var $uses = array();
    var $uses = array( 'Dgroup', 'Dish' );

    function index(){
//        $this->loadModel( 'Dish' );   
        $this->set( 'dgroups', $this->Dgroup->find( 'all', array('conditions' => array('Dgroup.show_on_main' => '1')) ));
    }
}
?>
