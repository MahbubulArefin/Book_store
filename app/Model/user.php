<?php
namespace App\Model;
class User{
	public $user_name;
	public $price;
	public $email;

	public function setUserName($userName){
        $this->user_name = trim($userName);
    }
    public function getUserName(){
        return $this->user_name;
	}

	public function setprice($price){
		$this->price = trim($price);
	}
	public function getprice(){
		return $this->price;
	}
	
}