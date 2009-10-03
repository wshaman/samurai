<?php
class CnewsController extends AppController {

    function admin_index(){
        $this->layout =  'admin';
        $this->set( 'news', $this->Cnew->find( 'all' ) );
    }
}
?>
