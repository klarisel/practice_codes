<?php
class CallableClass
{
  public function __invoke($x)
	//public function callThis($x)
    {   
	   echo "no function with this name: $x";
        //var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));
?>