<?php
class maxperdayController
{
    public function index()
    {
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/mex_per_day/index_mexperday.php');

    }
}?>