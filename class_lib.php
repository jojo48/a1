<?php
	class person {
		var $name;
			public $height;
			protected $social_insurance;
			private $pinn_number;
		
			function __construct($persons_name){ //Constructor is initial value for class
			$this->name=$persons_name;
			}
			
			private function get_pinn_number(){
			return
			$this->pinn_number;
			}
			
			function set_name($new_name){
			$this->name=$new_name;
			}
			
			function get_name(){
			return $this->name;
			}
	}
	
	class employee extends person{
		
		static $foo;   //declare for static access
		
		function __construct($employee_name){
			$this->set_name($employee_name);
			}
			
		function set_name($new_name){
			//$this->name=strtoupper($new_name);
			person::set_name($new_name); //static access use double colon sign (::)
			
			parent::set_name($new_name); //static access can access class from parent class 1 level
			}	
	}
?>