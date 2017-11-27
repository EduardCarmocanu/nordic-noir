<?php
require_once('core/database/DB.php');
require_once('core/database/QueryBuilder.php');

class Login_controller
{ 
    private $queryBuilder;
    private $users;

    public function __construct ()
	{
        $this->queryBuilder = new QueryBuilder(DB::CONNECT());
        $this->users = $this->queryBuilder->select_all_from('users');
    }


    public function checkUsers($username, $password){
        $error;
        foreach ($this->users as $value) {
            if($value['user_name'] === $username){
                if(password_verify($password,$value['password'])){
                    $error = $value;
                }else{
                    $error = "Password does not match";
                }
            }else{
                $error = "No User";
            }
        }
        return $error;
    }

    public function logout(){
        session_destroy();
    }
}


?>
