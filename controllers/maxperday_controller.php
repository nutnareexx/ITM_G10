<?php
class maxperdayController
{
    public function index()
    {
        $userid = $_GET['userid'];
        //$maxList = MaxperdayModel::get($userid);

        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/index_maxperday.php');

    }

    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $maxperday_list = MaxperdayModel::search($key);
        
        require_once('views/max_per_day/index_maxperday.php');
    }

    public function newMaxperday()
    {
        $userid = $_GET['userid'];
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/newMaxperday.php');
    }

    public function addMaxperday()
    {
        $userid = $_GET['userid'];
        //$max_id = $_GET['max_id'];
        $Hid = $_GET['H_name'];
        $max_date = $_GET['max_date'];
        $max_topen = $_GET['max_topen'];
        $max_tclose = $_GET['max_tclose'];
        $max_num = $_GET['max_num'];
        $hospitalmodelList = hospitalModel::getAll();
        MaxperdayModel::add($Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();

    }

    public function updateForm()
    {
        $userid = $_GET['userid'];
        //$userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/updateForm.php');
    }

    public function update()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $Hid = $_GET['Hid'];
        $max_date = $_GET['max_date'];
        $max_topen = $_GET['max_topen'];
        $max_tclose = $_GET['max_tclose'];
        $max_num = $_GET['max'];
        //$hospitalmodelList = hospitalModel::getAll();
        MaxperdayModel::update($max_id,$Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();
    }

    public function deleteConfirm()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        require_once('views/max_per_day/deleteConfirm.php');
    }

    public function delete()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        MaxperdayModel::delete($max_id);
        maxperdayController::index();
    }
}?>