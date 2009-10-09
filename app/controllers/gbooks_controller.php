<?php
class GbooksController extends AppController {

    function beforeFilter() {
        parent::beforeFilter();
//        $this->Auth->allowedActions = array('index', 'add', 'save' );
    }

    function index(){
        $this->set( 'par', $this->Gbook->getRecent(5) );
    }

    function add(){

    }

    function admin_index() {
        $this->layout='admin';
        $this->set( 'par', $this->Gbook->find( 'all' ) );
    }

    function admin_edit( $id ) {
        $this->layout='admin';
        $this->set( 'par', $this->Gbook->findById( (int) $id ) );
    }

    function admin_save(){
        $this->save();
    }

    function save(){
        $this->Gbook->save( $this->data );
        $this->redirect( '/gbooks/index' );
    }
}
?>
