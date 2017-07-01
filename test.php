<?php
abstract class Person{
	private $firstname, $lastname , $phone, $email;
	public function getFirstName() {return $this->firstname;}
	public function setFirstName($value) {$this->firstname = $value;}
	public function getLastName() {return $this->lastname;}
	public function setLastName($value) {$this->lastname = $value;}
	public function getPhone(){return $this->phone;}
	public function setPhone($value){$this->phone = $value;}
	public function getEmail(){return $this->email;}
	public function setEmail($value){$this->email = $value;}
	abstract public function getFullName();
}
class Customer extends Person{
	private $cardNumber, $cardType;
	public function __construct($first,$last,$phone,$email){
		$this->setPhone($phone);
		$this->setEmail($email);
		$this->setFirstName($first);
		$this->setLastName($last);
	}
	public function getCardNumber(){return $this->cardNumber;}
	public function setCardNumber($value){$this->cardNumber = $value;}
	public function getCardType(){return $this->cardType;}
	public function setCardType($value){$this->cardType = $value;}
	public function getFullName(){
		echo $this->getPhone();
		return $this->getFirstName() . ' ' . $this->getLastName().' '.$this->getPhone().' '.$this->getEmail();
	}
}
?>