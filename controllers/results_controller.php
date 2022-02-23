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

    public function updateForm()
    {
        $id = $_GET['id'];
        $resultss = Results::get($id);
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/Results/updateResults.php');
    }

    public function update()
    {
        $id = $_GET['id'];
        $uid = $_GET['uid'];
        $hid = $_GET['hid'];
        $rs = $_GET['rs'];
        Results::update($id,$uid,$hid,$rs);
        ResultsController::index();
    }
}

?>