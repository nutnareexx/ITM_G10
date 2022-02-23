<?php

class userController
{
    public function index()
    {
        $userList = userModel::getAll();
        require_once('views/Results/index_for_nurse.php');
    }

    
}

?>