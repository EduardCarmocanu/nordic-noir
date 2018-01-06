<?php
require_once('core/database/DB.php');
require_once('core/database/QueryBuilder.php');

class Login_controller
{ 
    private $queryBuilder;
    private $users;

    public function __construct ()
	{
        // Assign an instance of QueryBuilder in order to do Dababase operations
        $this->queryBuilder = new QueryBuilder(DB::CONNECT());
        $this->users = $this->queryBuilder->select_all_from('users');
    }


    public function checkUsers($username, $password){
        $error;

        // Runs through all users and checks if there is a match
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
        // Checks session to see if user is logged in
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
        // destroys session information in order to logout the user
        session_destroy();
        $this->checkIfHeaders("/admin");   
    }

    public function checkIfHeaders($place){
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="http://104.152.168.36/~nordicnoirtours'.$place.'";</script>');
        }else{
            header('Location:http://104.152.168.36/~nordicnoirtours/admin');
            die();
        }   
    }



}


?>
