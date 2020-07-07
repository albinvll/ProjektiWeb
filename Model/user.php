<?php
require('db_connection.php');

class User{
    
    private $name;
    private $surname;
    private $email;
	private $password;
	private $roli;

    public function __construct($name,$surname,$email,$password,$roli){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
		$this->password = $password;
		$this->roli = $roli;
    }

    public function getId(){
        global $connection;
        return mysqli_query($connection,"SELECT id FROM users WHERE email = '$this->email'");
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getEmail(){
        return $this->email;
    }
	public function getPassword(){
        return $this->password;
	}
	public function getRoli(){
		return $this->roli;
	}
    public function setName($n){
        $this->name = $n;
    }
    public function setSurname($n){
        $this->surname = $n;
    }
    public function setEmail($n){
        $this->email = $n;
    }
    public function setPassword($n){
        $this->password = $n;
	}

    public function __toString(){
        return (string)($this->name." ".$this->surname.", ".$this->email.". "." :=: ".$this->password);
    }
}
?>
