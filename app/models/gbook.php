<?php
class Gbook extends AppModel {
    var $table = 'gbook';
    var $order = 'Gbook.created DESC';


    function getRecent( $num=3 ){
        return $this->find( 'all', array( 'conditions' => array('publish'=>1), 'limit'=>(int)$num ) );
    }
}
?>
