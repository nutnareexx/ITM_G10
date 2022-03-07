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
        
        $userid = $_GET['userid'];
        
        $hospitalmodelList = hospitalModel::getAll();
        //require_once('views/hospital/indexhospital.php');
        require_once('views/hospital/indexhospitalAdmin.php');
    }


    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $hospitalmodelList = hospitalModel::search($key);
        //require_once('views/hospital/indexhospital.php');
        require_once('views/hospital/indexhospitalAdmin.php');
    }
    public function searchuser()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $hospitalmodelList = hospitalModel::search($key);
        require_once('views/hospital/indexhospital.php');
        //require_once('views/hospital/indexhospitalAdmin.php');
    }


    public function newhospital()
    {
        $userid=$_GET['userid'];
        $hospitalmodellist = hospitalModel::getAll();
        require_once('views/hospital/newhospitalAdmin.php');
    }

    public function addhospital()
    {
        $userid=$_GET['userid'];
        $Hid = $_GET['Hid'];
        $H_name = $_GET['H_name'];
        $H_time_open = $_GET['H_time_open'];
        $H_time_close = $_GET['H_time_close'];
        $H_price = $_GET['H_price'];
        hospitalModel::Add($Hid,$H_name,$H_time_open,$H_time_close,$H_price);
        hospital::indexAdmin();
     }

     public function updateforms()
     {
         $ht = $_GET['Hid'];
         $userid = $_GET['userid'];
         $hospitalmodels = hospitalModel::get($ht);
         require_once('views/hospital/updateformAdmin.php');
     }

     public function update()
     {
        $userid=$_GET['userid'];
        $Hid = $_GET['Hid'];
        $H_name = $_GET['H_name'];
        $H_time_open = $_GET['H_time_open'];
        $H_time_close = $_GET['H_time_close'];
        $H_price = $_GET['H_price'];
        $Hidnew = $_GET['Hidnew'];
        hospitalModel::update($Hid,$H_name,$H_time_open,$H_time_close,$H_price,$Hidnew);
        hospital::indexAdmin();
     }

     public function deleteconfirm()
     {
        $userid=$_GET['userid'];
        $Hid = $_GET['Hid'];
        $hospitalmodels =  hospitalModel::get($Hid);
        require_once('./views/hospital/deleteconfirmAdmin.php');
     }

     public function delete()
     {
        $userid=$_GET['userid'];
         $Hidnew = $_GET['Hidnew'];
         hospitalModel::delete($Hidnew);
         hospital::indexAdmin();
     }


}?>