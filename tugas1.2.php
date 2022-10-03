<?php
$arr=array(1,2,3,4,5);

$target = null;
$targetindex=null;

foreach($arr as $key => $value){
  if( $value<4 && $value>2 ){
    $target=$value;
    $targetindex=$key;
  }
 
}
 echo"Ketemu nih, Aku ada di index $targetindex dengan nilai $target";
?>