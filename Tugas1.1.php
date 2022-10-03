<?php
$arr=array(1,2,3,4,5);
$hasil=Null;
foreach($arr as $key => $val){
  $hasil = $hasil + $val;
  }
  echo"$hasil\n";

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