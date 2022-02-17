<?php
class hospital
{
    public function index()
    {
        $hospitalmodellist = hospitalModel::getAll();
        require_once('views/hospital/indexhospital.php');
    }

    public function search()
    {
        $key = $_GET['key'];
        $hospitalmodellist = hospitalModel::search($key);
        require_once('views/hospital/indexhospital.php');
    }
}?>