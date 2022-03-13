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
        $userid = $_GET['userid'];
        $resultsList = Results::getAll();
        require_once('views/Results/index_for_nurse.php');
    }

    public function newResultsNurse()
    {
        $userid = $_GET['userid'];
        $user = userModel::getAll();
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
        $userid = $_GET['userid'];
        $id = $_GET['id'];
        $resultss = Results::get($id);
        $resultsList = Results::getAll();
        $h_List = hospitalModel::getAll();
        require_once('views/Results/updateResults.php');
    }

    public function updateNurse()
    {
        $userid = $_GET['userid'];
        $id = $_GET['id'];
        //$uid = $_GET['uid'];
        $hid = $_GET['hid'];
        $rs = $_GET['rs'];
        Results::update($id,$hid,$rs);
        ResultsController::indexNurse();
    }

    public function deleteConfirmNurse()
    {
        $userid = $_GET['userid'];
        $id = $_GET['id'];
        $resultss = Results::get($id);
        require_once('views/Results/deleteConfirm.php');
    }

    public function deleteNurse()
    {
        $userid = $_GET['userid'];
        $id = $_GET['id'];
        Results::delete($id);
        ResultsController::indexNurse();
    }

    public function upload()
    {
        $userid = $_GET['userid'];
        $id = $_GET['id'];
        //echo $id;
        $re = Results::getresult($id);
        $resultsList = Results::getAll();
        require_once('views/Results/uploadResults.php');
        
    }

   /* public function upResult()
    {
        $id = $_GET['id'];
        echo $id;
        
        require_once('test.php');
        //require_once('add_file_db.php');
    }*/

    public function searchNurse()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $resultsList = Results::search($key);
        require_once('views/Results/index_for_nurse.php');
    }

    public function indexUser()
    {
        $userid = $_GET['userid'];
        $resultsList = Results::get($userid);
        if($resultsList->id==null){
            require_once('views/Results/waitForResult.php');
        }
        else{
            $fileList = fileModel::get($userid);
            require_once('views/Results/index_for_user.php');
        }
        
        //require_once('views/Results/index_for_nurse.php');
        // require_once('views/Results/index_for_user.php');
    } 

    public function download()
    {
        
        $name = $_GET['name'];
        require_once('up/$name');
        
    }

    
}

?>