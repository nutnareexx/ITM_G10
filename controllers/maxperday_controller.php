<?php
class maxperdayController
{
    public function index()
    {
        $userid = $_GET['userid'];
        //$maxList = MaxperdayModel::get($userid);

        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/index_maxperday.php');

    }

    public function indexNurse()
    {
        $userid = $_GET['userid'];
        //$maxList = MaxperdayModel::get($userid);

        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/index_maxperday.php');

    }

    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $maxperday_list = MaxperdayModel::search($key);
        
        require_once('views/max_per_day/index_maxperday.php');
    }

    public function newMaxperday()
    {
        $userid = $_GET['userid'];
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/newMaxperday.php');
    }

    public function addMaxperday()
    {
        $userid = $_GET['userid'];
        //$max_id = $_GET['max_id'];
        $Hid = $_GET['H_name'];
        $max_date = $_GET['max_date'];
        // $max_topen = $_GET['max_topen'];
        // $max_tclose = $_GET['max_tclose'];
        $max_num = $_GET['max_num'];
        
        if(isset($_GET['checkbox-1'])){
            $one = $_GET['checkbox-1'];
            $max_op_1 = substr($one,0,5);
            $max_cl_1 = substr($one,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_1,$max_cl_1,$max_num);
        }else{
            $one =0;
        }

        if(isset($_GET['checkbox-2'])){
            $two = $_GET['checkbox-2'];
            $max_op_2 = substr($two,0,5);
            $max_cl_2 = substr($two,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_2,$max_cl_2,$max_num);
        }else{
            $two =0;
        }

        if(isset($_GET['checkbox-3'])){
            $three = $_GET['checkbox-3'];
            $max_op_3 = substr($three,0,5);
            $max_cl_3 = substr($three,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_3,$max_cl_3,$max_num);
        }else{
            $three =0;
        }

        if(isset($_GET['checkbox-4'])){
            $four = $_GET['checkbox-4'];
            $max_op_4 = substr($four,0,5);
            $max_cl_4 = substr($four,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_4,$max_cl_4,$max_num);
        }else{
            $four =0;
        }

        if(isset($_GET['checkbox-5'])){
            $five = $_GET['checkbox-5'];
            $max_op_5 = substr($five,0,5);
            $max_cl_5 = substr($five,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_5,$max_cl_5,$max_num);
        }else{
            $five =0;
        }

        if(isset($_GET['checkbox-6'])){
            $six = $_GET['checkbox-6'];
            $max_op_6 = substr($six,0,5);
            $max_cl_6 = substr($six,6,5);
            MaxperdayModel::add($Hid,$max_date,$max_op_6,$max_cl_6,$max_num);
        }else{
            $six =0;
        }

        
        
    
        
        // if($two == null){
        //     echo $one."-".$three;
        // }
        // echo $one."/".$two."/".$three."<br>";
        // echo $max_op_1."||".$max_cl_1."<br>" ;
        // echo $max_op_2."||".$max_cl_2."<br>" ;
        // echo $max_op_3."||".$max_cl_3."<br>" ;
        // echo $max_op_4."||".$max_cl_4."<br>" ;
        // echo $max_op_5."||".$max_cl_5."<br>" ;
        // echo $max_op_6."||".$max_cl_6."<br>" ;
        $hospitalmodelList = hospitalModel::getAll();
        // MaxperdayModel::add($Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();

    }

    public function updateForm()
    {
        $userid = $_GET['userid'];
        //$userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/updateForm.php');
    }

    public function update()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $Hid = $_GET['Hid'];
        $max_date = $_GET['max_date'];
        $max_topen = $_GET['max_topen'];
        $max_tclose = $_GET['max_tclose'];
        $max_num = $_GET['max'];
        //$hospitalmodelList = hospitalModel::getAll();
        MaxperdayModel::update($max_id,$Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();
    }

    public function deleteConfirm()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        require_once('views/max_per_day/deleteConfirm.php');
    }

    public function delete()
    {
        $userid = $_GET['userid'];
        $max_id = $_GET['max_id'];
        MaxperdayModel::delete($max_id);
        maxperdayController::index();
    }
}?>