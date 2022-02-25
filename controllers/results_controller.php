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
        $h_List = hospitalModel::getAll();
        require_once('views/Results/newResults.php');
    }

    public function addResults()
    {
        $id = $_GET['id'];
        $rs = $_GET['rs'];
        $uid = $_GET['uid'];
        $hid = $_GET['hid'];
        $h_List = hospitalModel::getAll();
        Results::add($id,$rs,$uid,$hid);

        ResultsController::index();
    }

    public function updateForm()
    {
        $id = $_GET['id'];
        $resultss = Results::get($id);
        $resultsList = Results::getAll();
        $h_List = hospitalModel::getAll();
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

    public function deleteConfirm()
    {
        $id = $_GET['id'];
        $resultss = Results::get($id);
        require_once('views/Results/deleteConfirm.php');
    }

    public function delete()
    {
        $id = $_GET['id'];
        Results::delete($id);
        ResultsController::index();
    }

    public function upload()
    {
        //$FileID = $_GET['FileID'];
        //$FileList = UploadFile::upload($FileID);
        //UploadFile::upload($FileID);
       // require_once('views/Results/uploadResults.php');
        require_once('views/Results/uploadResults.php');
        
    }

    public function search()
    {
        $key = $_GET['key'];
        $resultsList = Results::search($key);
        require_once('views/Results/index_for_nurse.php');
    }
}

?>