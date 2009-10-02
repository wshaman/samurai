<?php
class DishesController extends AppController {
    var $name = 'Dishes';

    function admin_index( $id=NULL ){
        $this->layout =  "admin";
        if( is_null( $id ) ) $this->redirect( '/admin/dgroups/index/' );
        $this->set( "dishes", $this->Dish->findAllByDgroupsId( (int) $id ) );
        $this->set( "dgroups_id", (int) $id );
    }

    function admin_new( $id ) {
        $this->layout =  "admin";
        $this->set( "dish",  array( 'Dish'=>array( 'dgroups_id'=>(int) $id ) ) );
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
        $this->redirect( '/admin/dishes/index/'.$this->Dish->dgroups_id );
    }
}
?>
