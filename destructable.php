<?php
/*class A 
{ 
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
   function __construct1($a1) 
    { 
        echo('__construct with 1 param called: '.$a1.PHP_EOL); 
    } 
    
    function __construct1($a1,$a2) 
    { 
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL); 
    } 
    
    function __construct3($a1,$a2,$a3) 
    { 
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL); 
    } 
} 
$o = new A('sheep'); 
$o = new A('sheep','cat'); 
$o = new A('sheep','cat','dog'); 

// results: 
// __construct with 1 param called: sheep 
// __construct with 2 params called: sheep,cat 
// __construct with 3 params called: sheep,cat,dog 

*/

class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    /**  Overloading not used on declared properties.  */
    public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
           return $this->data;
		    return $this->data[$name];
        }
          
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
		
        return null;
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    public function __toString()
    {
        echo "Converting to string. ";
		throw new Exception("wrong call..");
         return "From class:".__CLASS__;		
    }

    /**  Not a magic method, just here for example.  */
    public function getHidden()
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new PropertyTest;
/*
$obj->hidden = 3;
echo $obj->hidden . "\n\n";
*/
var_dump(isset($obj->hidden));
unset($obj->a);
var_dump(isset($obj->hidden));
echo "\n";

echo $obj->declared . "\n\n";
echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";
$st = (string) $obj;
//echo ">> ".$st;

?>