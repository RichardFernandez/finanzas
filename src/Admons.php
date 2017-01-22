<?php
namespace FinanzasPHP;

class Admons{
	private $user;
	private $pass;
	private $name;

	public function __construct($user, $password){
		$this->user = $user;
		$this->pass = password_hash($password, PASSWORD_DEFAULT);

	}
	/**
	*@type string
	*/

	public function setName($nombre){
		$this->name = $nombre;

	}
}