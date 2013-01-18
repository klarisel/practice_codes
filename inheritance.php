<?php 
require("varprotected.php");

class DiscountCustomer extends Customer {
 
	private $discount;
 
	public function setData($namess, $discount) {
		//$this->setFirstName($namess);
		$this->FirstName = $namess; //this is storing $name to the Customer
				     //class $name variable. This works
				     // as it is a protected variable
 
		$this->discount = $discount;
	}
}
 
$dc = new DiscountCustomer();
$dc->setData("Sunil Bhatia",10);
//$dc->setFirstName("Claricel");

echo $dc->FirstName; // this does not work as $name is protected and hence
		// only available in Customer and DiscountCustomer class
//echo $dc->discount;
		?>