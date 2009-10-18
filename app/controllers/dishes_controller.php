<?php
class DishesController extends AppController {

    var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'RequestHandler', 'Img' );

    function admin_index( $id=NULL ){
/*        $r = $this->Dish->getAction( );
        var_dump( $r );*/
        $this->layout =  "admin";
        if( is_null( $id ) ) $this->redirect( '/admin/dgroups/index/' );
        $this->set( "dish", $this->Dish->findAllByDgroupId( (int) $id ) );
        $this->set( "dgroup_id", (int) $id );
    }

    function admin_new( $id ) {
        $this->layout =  "admin";
        $this->set( "dish",  array( 'Dish'=>array( 'dgroup_id'=>(int) $id ) ) );
    }

    function admin_edit( $id ) {
        $this->layout =  "admin";
        $this->set( "dish", $this->Dish->findById( (int) $id ) );
    }

    function admin_delete( $id ){
        $this->layout =  "admin";
        $this->Dish->delete( (int) $id );
        $this->redirect( $this->referer() );
    }

    //function admin_save( $id ) {
    function admin_save( ) {
        $this->layout =  "admin";
        $this->Dish->save( $this->data );
        $this->Img->makeimgs( $this->Dish->getLastFileName() );
        $this->redirect( '/admin/dishes/index/'.$this->data['Dish']['dgroup_id'] );
    }

    function show( $id=NULL ){
        $this->layout="empty-black";
        $this->set( 'dish', $this->Dish->findById( (int)$id ) );
    }
}
?>
