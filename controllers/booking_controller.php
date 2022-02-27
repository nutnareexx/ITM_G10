<?php
class bookingController
{
    public function index()
    {
        $booking_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/booking/index_booking.php');

    }

    public function search()
    {
        $key = $_GET['key'];
        $booking_list = MaxperdayModel::search($key);
        
        require_once('views/booking/index_datebook.php');
    }

    public function bookdate(){
        $id = $_GET['Hid'];
        
        $date = MaxperdayModel::s($id);
        $name = hospitalModel::get($id);
        require_once('views/booking/index_datebook.php');
    }

    public function checkbook()
    {
        $max_id = $_GET['max_id'];
        $booking = MaxperdayModel::get($max_id);
        require_once('views/booking/checkbook.php');
    }


     /*public function newMaxperday()
    {
        $maxperday_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/newMaxperday.php');
    }

    public function addMaxperday()
    {
        $max_id = $_GET['max_id'];
        $Hid = $_GET['H_name'];
        $max_date = $_GET['max_date'];
        $max_topen = $_GET['max_topen'];
        $max_tclose = $_GET['max_tclose'];
        $max_num = $_GET['max_num'];
        $hospitalmodelList = hospitalModel::getAll();
        MaxperdayModel::add($max_id,$Hid,$max_date,$max_topen,$max_tclose,$max_num);
        maxperdayController::index();

    }

    public function updateForm()
    {
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/max_per_day/updateForm.php');
    }

    public function update()
    {
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
        $max_id = $_GET['max_id'];
        $m = MaxperdayModel::get($max_id);
        require_once('views/max_per_day/deleteConfirm.php');
    }

    public function delete()
    {
        $max_id = $_GET['max_id'];
        MaxperdayModel::delete($max_id);
        maxperdayController::index();
    }*/
}?>