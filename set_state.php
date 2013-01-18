<?php
class Dummy {
  private $value1_;
  private $value2_;
 
  function __construct() {
    $this->value1_ = 100;
    $this->value2_ = "100";
  }
   static function __set_state(array $array) {
    foreach($array as $k => $v) {
      echo("$k ==> $v <br/>");
    }
  }
  
  }
 
$aDummy = new Dummy();
var_dump($aDummy);
var_export($aDummy);
eval(var_export($aDummy, true) . ';'); 
?>