<?php

class Login 
{
	private $email;
	private $raw_password;
	private $queryBuilder;
	// private $encripter;
	
	public function __construct ($email, $raw_password, $queryBuilder /*$encripter*/)
	{
		$this->email = $email;
		$this->raw_password = $raw_password;
		$this->queryBuilder = $queryBuilder;
		// $this->encripted = $encripter;
	}
	
	public function authenticate () 
	{
		try {
			$dbMatch = $this->queryBuilder->select_all_where(
				'users',
				'email',
				$this->email
				)[0];
			} catch(Exception $e) {
				die("There was an internal database error");
			}
			
			// Password needs to be encripted with the salt coming from the database and then compared
			// $encripted_password = $this->encripter->encript($this->raw_password, $dbMatch["salt"]);
			
			if ($dbMatch['password'] /* === $encripted_password */) {
				return true;
			}
			return false;
		}
	}