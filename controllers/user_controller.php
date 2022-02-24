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
        $phone = $_GET['uphone'];
        $mail = $_GET['umail'];
        foreach ($userList as $u){
            if($u->uid=$id){
                echo "have user";
                break;
            }
            else{
                echo "suceess";
            }
        }
    }

    
}

?>