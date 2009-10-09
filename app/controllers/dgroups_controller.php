<?php
class DgroupsController extends AppController {
//    var $models=array( 'Dgroup', 'Dish' );
//    var $helpers = array('Html','Ajax','Javascript');
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );

    function beforeFilter() {
        parent::beforeFilter();
//        $this->Auth->allowedActions = array('index' );
    }

    function index(){
    }
    function admin_index(){
        $this->layout =  "admin";
        $this->set( "dgroups", $this->Dgroup->find( 'all' ) );
    }

    function admin_delete( $id ){
        $this->layout =  "admin";
        $this->Dgroup->delete( (int) $id );
        $this->flash( 'Раздел меню удалён', "/admin/dgroups",  3);
    }

    function admin_new(){
        $this->layout =  "admin";

    }

    function admin_edit( $id ){
        $this->layout =  "admin";
        $this->set( "dgroup", $this->Dgroup->findById( (int) $id ) );
    }

    function admin_save( $id=NULL ){
        $this->layout =  "admin";
        $this->Dgroup->save( $this->data );
        $this->flash( "Раздел {$this->data->name} создан", "/admin/dgroups",  3);
        //$this->redirect( "/admin/dgroups" );
    }
}
?>
