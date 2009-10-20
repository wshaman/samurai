<?php
class ImgComponent extends Object {
    var $imgDir;
    var $thumbfix = '_THUMB';
    var $fullfix = '';
    var $ThumbWidth=90;


    function makeimgs( $name=NULL ){
        if( is_null( $name ) ) return false;
/*        $sysmagic = "/usr/share/misc/magic";
        $ownmagic = CAKE_CORE_INCLUDE_PATH.'/app/vendors/magic';
        $magic = ( is_file ( $sysmagic ) ) ? $sysmagic : $ownmagic;
        $finfo = new finfo( FILEINFO_MIME, $magic );
        if (!$finfo) {
            echo "Opening fileinfo database failed";
            die;
//            exit();
        }
        $file_type=$finfo->file( DISH_IMAGES.$name );*/
        $file_name= DISH_IMAGES.$name;
        $file_type=trim( preg_replace( '/;.*/', '', exec( 'file -i -b '.$file_name ) ) );
        if($file_type == "image/pjpeg" || $file_type == "image/jpeg"){
            $new_img = imagecreatefromjpeg($file_name);
        } elseif($file_type == "image/x-png" || $file_type == "image/png") {
            $new_img = imagecreatefrompng($file_name);
        }elseif($file_type == "image/gif"){
            $new_img = imagecreatefromgif($file_name);
        }
        list($width, $height) = getimagesize($file_name);
        $imgratio=$width/$height;
        if ($imgratio>1){
           $newwidth = $this->ThumbWidth;
           $newheight = $this->ThumbWidth/$imgratio;
        }else{
           $newheight = $this->ThumbWidth;
           $newwidth = $this->ThumbWidth*$imgratio;
        }
       if (function_exists('imagecreatetruecolor'))
           $resized_img = imagecreatetruecolor($newwidth,$newheight);
       else die("Error: Please make sure you have GD library ver 2+");
       imagecopyresized($resized_img, $new_img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
       ImageJpeg ($resized_img,$file_name.$this->thumbfix);
       ImageDestroy ($resized_img);
       ImageDestroy ($new_img);
       return true;
    }
}
?>