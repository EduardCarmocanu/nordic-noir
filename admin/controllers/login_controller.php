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



    public function userLogged(){
        if(isset($_SESSION['logged']) && $_SESSION['logged'] != "No User"){
            if($_SESSION['logged'] == true){
                return true;	
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function logout(){
        session_destroy();
        $this->checkIfHeaders("/admin");   
    }

    public function checkIfHeaders($place){
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="'.$place.'";</script>');
        }else{
            header('Location:/admin');
            die();
        }   
    }



}


?>
