<?php

use LDAP\Result;

class ResultsController
{
    public function index()
    {
        $resultsList = Results::getAll();
        require_once('views/Results/index_for_nurse.php');
        require_once('views/Results/index_for_user.php');
    }

    public function newResults()
    {
        $resultsList = Results::getAll();
        require_once('views/Results/newResults.php');
    }

    public function addResults()
    {
        $id = $_GET['r_id'];
        $rs = $_GET['results'];
        $uid = $_GET['user_id'];
        $hid = $_GET['Hid'];
        Results::add($id,$rs,$uid,$hid);

        ResultsController::index();
    }

    public function updateForm()
    {
        $id = $_GET['r_id'];
        $resultss = Results::get($id);
        $prenameList = prenameModel::getAll();
        $h_List = hospitalModel::getAll();
        $u_List = userModel::getAll();
        require_once('views/Results/updateResults.php');
    }

    public function update()
    {
        $id = $_GET['r_id'];
        $uid = $_GET['user_id'];
        $hid = $_GET['Hid'];
        $rs = $_GET['results'];
        Results::update($id,$uid,$hid,$rs);
        ResultsController::index();
    }
}

?>