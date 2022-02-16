<?php
class hospital
{
    public function index()
    {
        $hospitalmodellist = hospitalModels::getAll();
        require_once('views/hospital/indexhospital.php');
    }
}?>