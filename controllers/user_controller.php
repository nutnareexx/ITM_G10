<?php

class userController
{
    public function index()
    {
        $userList = userModel::getAll();
        require_once('views/user/index_user.php');
    }

    public function indexlogin(){
        require_once('views/login/index_login.php');
    }


    public function signin(){
        $prenameList = prenameModel::getAll();
        require_once('views/user/newuser.php');
    }

    public function adduser(){
        $userList = userModel::getAll();
        $id = $_GET['uid'];
        $preid = $_GET['preid'];
        $name = $_GET['uname'];
        $surname = $_GET['usurname'];
        $dob = $_GET['udob'];
        $phone = $_GET['uphone'];
        $mail = $_GET['umail'];
        $check = 0;

        foreach ($userList as $u){
            if($u->uid==$id){
                echo "".$u->uid. ", ".$id;
                echo " have user ";
                $check = 1;
                break;
            }
            else{
                $check = 0;
            }  
        }

        if($check == 1){
            userController::error();
        }
        else{
            echo " suceess ";
            userModel::add($id,$preid,$name,$surname,$dob,$phone,$mail);
            userController::newpassword($id);
        }
    }

    public function error(){
        require_once('views/login/error.php');
    }

    public function newpassword($id){
        $this->id = $id;
        echo "- ".$id." new password -";
        require_once('views/login/newlogin.php');
    }

    public function addpassword(){
        $id = $_GET['id'];
        $password = $_GET['password'];
        $confirm = $_GET['confirm'];

        echo "- ".$id." , ".$password."add password -";

        //$check = 0;
        if($password == $confirm){
            loginModel::add($id,$password);
            require_once('views/login/succeess.php');
        }
        else{
            echo "- Password Don't Match -";
            require_once('views/login/newlogin.php');
        }
    }

    public function login(){
        $logList = loginModel::getAll();
        $id = $_GET['username'];
        $pass = $_GET['password'];
        $c = 0;

        foreach($logList as $log){
            if($log->uid == $id){
                $c=1;
                break;
            }
        }

        if($c == 1){
            echo $c;
            $loginList = loginModel::get($id);
            if($loginList->pw == $pass){
                if($loginList->permission == 'N'){
                    require_once('views/pages/home_n.php');
                }
                else if($loginList->permission == 'G'){
                    require_once('views/pages/home.php');
                }
                
            }
            else{
                echo "<br> WRONG PASSWORD ";
                userController::indexlogin();
            }
            
        }
        else{
            echo "<br> DON'T HAVE";
            userController::indexlogin();
        }
        
      
    }  
}

?>