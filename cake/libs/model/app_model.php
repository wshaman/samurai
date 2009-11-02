<?php
/* SVN FILE: $Id$ */
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/app_model.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.model
 */
class AppModel extends Model {
    var $lastFN = '';
    var $lastFT = '';

    function prepareimg( $p1, $p2 ){
        $fname = md5( microtime().mt_rand() );
        $this->lastFN = $fname;
        var_dump( $this->data );
        if( empty( $this->data[$p1][$p2]['type'] ) ){
            $ft =strtolower( preg_replace( '/(.*)\.(\w+$)/', '$2', $this->data[$p1][$p2]['name'] ));
            if( !empty( $ft ) ) $ft = 'image/'.$ft;
        } else $ft = $this->data[$p1][$p2]['type'];
        if( empty( $ft ) ){
            echo "Немогу определить тип изображения, считаю что png. За последствия не ручаюсь!";
            $ft = 'image/png';
        }
        $this->lastFT = $ft; 
    }

    function getLastFileType(){
        return $this->lastFT;
    }

    function getLastFileName(){
        return $this->lastFN;
    }

}
?>
