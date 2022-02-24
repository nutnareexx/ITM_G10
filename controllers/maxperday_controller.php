<?php
class maxperdayController
{
    public function index()
    {
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/index_maxperday.php');

    }

    public function search()
    {
        $key = $_GET['key'];
        $maxperday_list = MaxperdayModel::search($key);
        require_once('views/max_per_day/index_maxperday.php');
    }

    public function newMaxperday()
    {
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/newMaxperday.php');
    }

    public function addMaxperday()
    {
        $Hid = $_GET['Hid'];
        $max_date = $_GET['date'];
        $max_topen = $_GET['time_open'];
        $max_tclose = $_GET['time_close'];
        $max_num = $_GET['max'];
        MaxperdayModel::Add($Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();

    }

    public function updateForm()
    {
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/updateForm.php');
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

}?>