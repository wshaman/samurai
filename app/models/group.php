<?php
class Group extends AppModel {

	var $name = 'Group';
	var $validate = array( 'name' => array('notempty') );
	var $hasMany = 'User';
//    var $actsAs = array('Acl' => array('requester'));

/*    function parentNode() {
        return null;
    }*/
}
?>
