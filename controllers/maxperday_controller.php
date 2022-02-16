<?php
class maxperdayController
{
    public function index()
    {
        $maxperday_list = Maxperday::getAll();
        require_once('views/mex_per_day/index_mexperday.php');

    }
}?>