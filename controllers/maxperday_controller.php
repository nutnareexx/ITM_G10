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

}?>