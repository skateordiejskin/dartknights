<?php

require_once('../app/database/app.class.php');

class Login{
	private $loginID;
	private $playerID;
	private $email;
	private $password;
	
	public function __construct(){
		$this->loginID=$loginID;
		$this->playerID=$playerID;
		$this->email=$email;
		$this->password=$password;	
	}
	public static function login($email, $password){
		$login =  new Database();
		$login->query("SELECT l.loginID, l.playerID, p.playerID, p.firstName, p.lastName FROM login AS l, players AS p
						WHERE 
							email=:email 
						AND 
							password=:password
						AND 
							l.playerID=p.playerID");
		$login->bind(":email", $email);
		$login->bind(":password", $password);
		return $login->single();
	}
}