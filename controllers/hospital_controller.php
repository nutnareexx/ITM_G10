<?php
class hospital
{
    public function index()
    {
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/hospital/indexhospital.php');
    }


}?>