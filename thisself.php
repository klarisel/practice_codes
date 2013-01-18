<?php 
class exampleClass
{
    public static $foo;
	public $foo2;
    private $bar;
    public function regularFunction() { echo $this->bar; }

    public static function staticFunction() { echo self::$foo; }

    public static function anotherStatFn() { self::staticFunction(); }

    public function regularFnUsingStaticVar() { echo self::$foo; }
    
    // NOTE: As of PHP 5.3 using $this::$bar instead of self::$bar is allowed

}


class A extends exampleClass {
      function test() { 
	  $this->bar = "protected  ";
	  echo $this->bar; }

} 


$objA = new A();

echo $objA->test(); 
exampleClass::$foo = "Hello";
//exampleClass::$foo2 = "Hello2";
echo exampleClass::regularFnUsingStaticVar();
$obj = new exampleClass();

//$obj->bar = "World!";

exampleClass::staticFunction(); /* prints Hello */

$obj->regularFunction(); /* prints World! */
?>