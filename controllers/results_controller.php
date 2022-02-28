<?php

use LDAP\Result;

class ResultsController
{
    public function index()
    {
        $resultsList = Results::getAll();
        require_once('views/Results/index_for_nurse.php');
        //require_once('views/Results/index_for_user.php');
    }
    public function indexNurse()
    {
        $resultsList = Results::getAll();
        require_once('views/Results/index_for_nurse.php');
        //require_once('views/Results/index_for_user.php');
    }

    public function newResultsNurse()
    {
        $resultsList = Results::getAll();
        $h_List = hospitalModel::getAll();
        require_once('views/Results/newResults.php');
    }

    public function addResultsNurse()
    {
        $id = $_GET['id'];
        $rs = $_GET['rs'];
        $uid = $_GET['uid'];
        $hid = $_GET['hid'];
        $h_List = hospitalModel::getAll();
        Results::add($id,$rs,$uid,$hid);

        ResultsController::indexNurse();
    }

    public function updateFormNurse()
    {
        $id = $_GET['id'];
        $resultss = Results::get($id);
        $resultsList = Results::getAll();
        $h_List = hospitalModel::getAll();
        require_once('views/Results/updateResults.php');
    }

    public function updateNurse()
    {
        $id = $_GET['id'];
        $uid = $_GET['uid'];
        $hid = $_GET['hid'];
        $rs = $_GET['rs'];
        Results::update($id,$uid,$hid,$rs);
        ResultsController::indexNurse();
    }

    public function deleteConfirmNurse()
    {
        $id = $_GET['id'];
        $resultss = Results::get($id);
        require_once('views/Results/deleteConfirm.php');
    }

    public function deleteNurse()
    {
        $id = $_GET['id'];
        Results::delete($id);
        ResultsController::indexNurse();
    }

    public function upload()
    {
        $id = $_GET['id'];
        echo $id;
        $re = Results::getresult($id);
        require_once('views/Results/uploadResults.php');
        
    }

    public function upResult()
    {
        $id = $_GET['id'];
        echo $id;
        
        require_once('test.php');
        //require_once('add_file_db.php');
    }

    public function searchNurse()
    {
        $key = $_GET['key'];
        $resultsList = Results::search($key);
        require_once('views/Results/index_for_nurse.php');
    }

    public function indexUser()
    {
        $userid = $_GET['userid'];
        $resultsList = Results::get($userid);
        $fileList = fileModel::get($resultsList->id);
        //require_once('views/Results/index_for_nurse.php');
        require_once('views/Results/index_for_user.php');
    } 

    public function download()
    {
        $name = $_GET['name'];
        require_once('up/$name');
        
    }

    
}

?>