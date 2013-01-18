<?php 
class Customer {
	private $FirstName;
 
	protected function setFirstName($name) {
		$this->FirstName = $name;
	}
 
	protected function getFirstName() {
		return $this->FirstName;
	}
}
 

		
?>