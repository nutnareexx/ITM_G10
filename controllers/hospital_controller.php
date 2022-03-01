<?php
class hospital
{
    public function index()
    {
        $userid=$_GET['userid'];
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/hospital/indexhospital.php');
        require_once('views/hospital/indexhospitalAdmin.php');
    }
    
    public function indexUser()
    {
        $userid = $_GET['userid'];
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/hospital/indexhospital.php');
        //require_once('views/hospital/indexhospitalAdmin.php');
    }
    
    public function indexAdmin()
    {
        $hospitalmodelList = hospitalModel::getAll();
        //require_once('views/hospital/indexhospital.php');
        require_once('views/hospital/indexhospitalAdmin.php');
    }


    public function search()
    {
        $key = $_GET['key'];
        $hospitalmodelList = hospitalModel::search($key);
        require_once('views/hospital/indexhospital.php');
        require_once('views/hospital/indexhospitalAdmin.php');
    }


    public function newhospital()
    {
        $hospitalmodellist = hospitalModel::getAll();
        require_once('views/hospital/newhospitalAdmin.php');
    }

    public function addhospital()
    {
        $Hid = $_GET['Hid'];
        $H_name = $_GET['H_name'];
        $H_time_open = $_GET['H_time_open'];
        $H_time_close = $_GET['H_time_close'];
        $H_price = $_GET['H_price'];
        hospitalModel::Add($Hid,$H_name,$H_time_open,$H_time_close,$H_price);
        hospital::index();
     }

     public function updateforms()
     {
         $ht = $_GET['Hid'];
         $hospitalmodels = hospitalModel::get($ht);
         require_once('views/hospital/updateformAdmin.php');
     }

     public function update()
     {
        $Hid = $_GET['Hid'];
        $H_name = $_GET['H_name'];
        $H_time_open = $_GET['H_time_open'];
        $H_time_close = $_GET['H_time_close'];
        $H_price = $_GET['H_price'];
        $Hidnew = $_GET['Hidnew'];
        hospitalModel::update($Hid,$H_name,$H_time_open,$H_time_close,$H_price,$Hidnew);
        hospital::index();
     }

     public function deleteconfirm()
     {
        $Hid = $_GET['Hid'];
        $hospitalmodels =  hospitalModel::get($Hid);
        require_once('./views/hospital/deleteconfirmAdmin.php');
     }

     public function delete()
     {
         $Hidnew = $_GET['Hidnew'];
         hospitalModel::delete($Hidnew);
         hospital::index();
     }


}?>