<?php 

class firstClass {   
  protected $var1 = 1; 
  private   $var2 = 2; 
   
  public function move() { 
    print ($this->var1 + $this->var2  ); 
  } 
   
} 

class secondClass extends firstClass { 

  public function talk() { 
 //   $this->var1 = 34; //private .. possible?
    //$this->var2 = 35; //protected .. possible
    print ($this->var1 + $this->var2 ); 
  } 
} 

$var = new secondClass(); 

$var->talk();  // result: 1 
echo "\n\n";
echo $var->var2;  //private .. possible?
echo "\n\n";
var_dump($var->var2);
//echo $var->var4;  //protected .. error
echo "\n\n";
$var->move();  // result: 6 
?>