<?php
function getMiddle($text) {
  $b = strlen($text)/2;
  
  if( strlen($text) % 2 == 0 ){
    return substr($text, $b-1,2);
  } else {
    return $b < 1 ? substr($text,0) : substr($text,floor($b),1);
  }
}

var_dump(getMiddle("dos"));