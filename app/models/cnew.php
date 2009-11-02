<?php
class Cnew extends AppModel {
    //var $name = 'Cnew';
    var $order = 'Cnew.created DESC';

    function beforeSave(){
        $this->prepareimg( 'Cnew', 'imagefile' );
        if( isset( $this->data['Cnew']['imagefile'] ) ){
        //    var_dump( $this->data['Cnew']['imagefile'], NEWS_IMAGES.$fname );
            if( !move_uploaded_file( $this->data['Cnew']['imagefile']['tmp_name'], NEWS_IMAGES.$this->lastFN )){
                echo("RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR");
            }else{
                $this->data['Cnew']['image'] = $this->lastFN;
            }

        }
//        $this->data['Cnew']['created'] = 'NOW()';
        return true;
    }

    function getRecent( $num=3 ){
        return $this->find( 'all', array( 'limit'=>(int)$num ) );
    }
}
?>
