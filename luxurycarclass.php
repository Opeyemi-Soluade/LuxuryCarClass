<?php 
class SprotsCar {
// properties
	protected $name;
	protected $type;
	protected $price;
	protected $year;

// methods
	public function __constructor ($name, $type, $price, $year) {
	$this -> name = $name;
	$this -> type = $type;
	$this -> price = $price;
	$this -> year = $year;	
	}

	public function get_name(){
		return $this -> name;
	}
	public function get_type(){
		return $this -> type;
	}
	public function get_price(){
		return $this -> price;
	}
	public function get_year(){
		return $this -> year;
	}

	public function __destruct() {
		echo "This {$this -> name} is the latest sports car";
	}


}

$lexus = new SportsCar('lexus 550', 'V8', '50000000', '2022');
    echo ($lexus -> get_price() . '<br>');

class LuxuxyCar extends SportsCar {
public function get_name() {
	return $this -> name;
}	

public function get_type() {
	return $this -> type;
}
public function get_price() {
	return $this -> price;
}

public function get_year() {
	return $this -> year;
}

}

$camry = new LuxuxyCar('camry 201', 'CM', '70000000', '2024');
echo ($camry -> get_price());




?>