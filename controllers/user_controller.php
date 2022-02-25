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
        $x=0;
        foreach ($userList as $u){
            if($u->uid==$id){
                echo "".$u->uid. ", ".$id;
                echo " have user ";
                $x =1;
            }
            else{
                $x=0;
            }  
        }

        if($x==1){
            userController::error();
        }
        else{
            echo " suceess ";
            //userModel::add($id,$preid,$name,$surname,$dob,$phone,$mail);
            userController::newpassword($id);
        }
    }

    public function error(){
        require_once('views/login/error.php');
    }

    public function newpassword($id){
        $this->id = $id;
        echo $id."new password";
        require_once('views/login/newlogin.php');
    }

    public function addpassword(){
        
    }



    

    
}

?>