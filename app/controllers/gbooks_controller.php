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
        $this->save( false );
    }

    function save( $user= true ){
        $this->Gbook->save( $this->data );
        if( $user ){
            $message="Новый запись в гостевой!";
            $to=Configure::read('contact_mail' );
            $subj="Новая запись!";
            mail( $to, $subj, $message );
        }
        $this->redirect( '/gbooks/index' );
    }
}
?>
