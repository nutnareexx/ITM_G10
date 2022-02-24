<?php

class userController
{
    public function index()
    {
        $userList = userModel::getAll();
        require_once('views/user/index_user.php');
    }

    public function signin(){
        $prenameList = prenameModel::getAll();
        require_once('views/user/newuser.php');
    }

    public function add(){
        $userList = userModel::getAll();

        //foreach
    }

    
}

?>