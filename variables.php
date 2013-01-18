<?php
/*
@strpos();
//echo $php_errormsg;
$example = 1234;
$p = print("$example hello');
var_dump($p);

$e = "test1";
echo "$e";
*/

function sparkles(Callable $func) {
  $func();
  return "fairy dust";
}
 
class Butterfly {
  public function __invoke() {
    echo "flutter";
  }
}
 
$bob = new Butterfly();
echo sparkles($bob); // flutterfairy dust

?>
