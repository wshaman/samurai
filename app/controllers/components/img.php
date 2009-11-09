<?php
class ImgComponent extends Object {
    var $imgDir;
    var $thumbfix = '_THUMB';
    var $fullfix = '';
    var $ThumbWidth=90;
    var $ThumbHeight=90;


#
function resize($img, $w, $h, $newfilename) {
#
 
#
 //Check if GD extension is loaded
#
 if (!extension_loaded('gd') && !extension_loaded('gd2')) {
#
  trigger_error("GD is not loaded", E_USER_WARNING);
#
  return false;
#
 }
#
 
#
 //Get Image size info
#
 $imgInfo = getimagesize($img);
#
 switch ($imgInfo[2]) {
#
  case 1: $im = imagecreatefromgif($img); break;
#
  case 2: $im = imagecreatefromjpeg($img);  break;
#
  case 3: $im = imagecreatefrompng($img); break;
#
  default:  trigger_error('Unsupported filetype!', E_USER_WARNING);  break;
#
 }
#
 
#
 //If image dim
#
 switch ($imgInfo[2]) {
#
  case 1: $im = imagecreatefromgif($img); break;
#
  case 2: $im = imagecreatefromjpeg($img);  break;
#
  case 3: $im = imagecreatefrompng($img); break;
#
  default:  trigger_error('Unsupported filetype!', E_USER_WARNING);  break;
#
 }
#
 
#
 //If image dimension is smaller, do not resize
#ension is smaller, do not resize
#
 if ($imgInfo[0] <= $w && $imgInfo[1] <= $h) {
#
  $nHeight = $imgInfo[1];
#
  $nWidth = $imgInfo[0];
#
 }else{
#
                //yeah, resize it, but keep it proportional
#
  if ($w/$imgInfo[0] > $h/$imgInfo[1]) {
#
   $nWidth = $w;
#
   $nHeight = $imgInfo[1]*($w/$imgInfo[0]);
#
  }else{
#
   $nWidth = $imgInfo[0]*($h/$imgInfo[1]);
#
   $nHeight = $h;
#
  }
 }
 $nWidth = round($nWidth);
 $nHeight = round($nHeight);
 $newImg = imagecreatetruecolor($nWidth, $nHeight);
 /* Check if this image is PNG or GIF, then set if Transparent*/  
 if(($imgInfo[2] == 1) OR ($imgInfo[2]==3)){
  imagealphablending($newImg, false);
  imagesavealpha($newImg,true);
  $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
  imagefilledrectangle($newImg, 0, 0, $nWidth, $nHeight, $transparent);
 }
 imagecopyresampled($newImg, $im, 0, 0, 0, 0, $nWidth, $nHeight, $imgInfo[0], $imgInfo[1]);
 //Generate the file, and rename it to $newfilename
 switch ($imgInfo[2]) {
  case 1: imagegif($newImg,$newfilename); break;
  case 2: imagejpeg($newImg,$newfilename);  break;
  case 3: imagepng($newImg,$newfilename); break;
  default:  trigger_error('Failed resize image!', E_USER_WARNING);  break;
 }
   
   return $newfilename;
}

    function makeimgs( $name=NULL, $type='dish' ){

        if( is_null( $name ) ) return false;
        if( is_array( $name ) ){
            $ftype=$name[1];
            $name = $name[0];
        }

        switch( $type ){
            case 'dish' : $file_name= DISH_IMAGES.$name;break;
            case 'cnew' : $file_name= NEWS_IMAGES.$name;break;
        }

        if( $this->resize( $file_name, $this->ThumbWidth, $this->ThumbHeight, $file_name.$this->thumbfix ) ) return true;
        else return false;
        


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
        switch( $type ){
            case 'dish' : $file_name= DISH_IMAGES.$name;break;
            case 'cnew' : $file_name= NEWS_IMAGES.$name;break;
        }
        if( isset( $ftype )) 
            $file_type = $ftype;
        else
            $file_type=trim( preg_replace( '/;.*/', '', exec( 'file -i -b '.$file_name ) ) );
        if($file_type == "image/pjpeg" || $file_type == "image/jpeg"){
            $new_img = imagecreatefromjpeg($file_name);
        } elseif($file_type == "image/x-png" || $file_type == "image/png") {
            $new_img = imagecreatefrompng($file_name);
            imagecolortransparent($new_img, imagecolorallocate($new_img, 0, 0, 0));

            imagealphablending( $new_img, false );
            imagesavealpha( $new_img, true );
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
