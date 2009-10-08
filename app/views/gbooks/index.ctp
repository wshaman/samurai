<?php echo $html->css( 'gbook' );

?>
<div class="recordlist">
<?php
foreach( $par as $p ){
    echo $html->link( 'Спросить Самурая', 
                array('controller'=>'gbooks', 'action'=>'add') );
    $p = $p['Gbook'];
    echo '<div class="record">';
    echo '<div class="caption"><span class="data">'.$p['created'].',&nbsp;'.$p['author'].'</span><span class="text">&nbsp;написал(а):</span></div>';
    echo '<div class="text">'.$p['text'].'</div>';

    if( !empty( $p['answer'] ) ){ 
        echo '<div class="caption"><span class="text">На что <span class="data">Самурай</span> ответил:</span></div>';
        echo '<div class="text">'.$p['answer'].'</div>';
    }
    echo '</div>';
}
?>
</div>
