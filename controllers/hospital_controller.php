<?php
class hospital
{
    public function index()
    {
        $hospitalmodellist = hospitalModel::getAll();
        require_once('views/hospital/indexhospital.php');
    }
}?>