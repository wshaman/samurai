<?php
class CnewsController extends AppController {
    var $uses = array( 'Cnew' );
    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler' );

    function beforeFilter() {
        parent::beforeFilter();
//        $this->Auth->allowedActions = array('index' );
    }

    function admin_index(){
        $this->layout =  'admin';
        $this->set( 'news', $this->Cnew->find( 'all' ) );
    }
    function admin_new( ) {
        $this->layout =  "admin";
        $this->set( "cnew",  array( 'Cnew'=>array()));
    }

    function admin_edit( $id ) {
        $this->layout =  "admin";
        $this->set( "cnew", $this->Cnew->findById( (int) $id ) );
    }

    function admin_delete( $id ){
        $this->layout =  "admin";
        $this->Cnew->delete( (int) $id );
        $this->redirect( $this->referer() );
    }

    function admin_save( ) {
        $this->layout =  "admin";
        $this->Cnew->save( $this->data );
        $this->redirect( '/admin/cnews/index/' );
    }
}
?>
