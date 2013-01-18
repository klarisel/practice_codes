<?php
//echo "calling... test..";

function test() {
	//echo "in test function";
    throw new Exception('error message');
}

try {
    test();
} catch(Exception $e) {
	//echo $e->getMessage()."\n\n----";
   //echo $e->getTraceAsString();
   //echo $e->getMessage() + $e->getTraceAsString();
   //echo $e->getMessage()->$e->getTraceAsString();
}


for($a=0;$a<=10;$a++){
	if($a==5) throw new Exception('error message'.$a);
}