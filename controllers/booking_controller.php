<?php
class bookingController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $booking_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/booking/index_booking.php');

    }

    public function indexafter()
    {
        $userid = $_GET['userid'];
        $booking_list = MaxperdayModel::getAll();
        $hospitalmodelList = hospitalModel::getAll();
        require_once('views/booking/index_booking.php');

    }

    public function search()
    {
        $userid = $_GET['userid'];
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $booking_list = MaxperdayModel::search($key);
        $hospitalmodelList = hospitalModel::search($key);
        require_once('views/booking/index_booking.php');
    }

    public function bookdate()
    {
        $id = $_GET['Hid'];
        $userid = $_GET['userid'];
        $dmyList = maxModel::getd($id);
        $date = MaxperdayModel::s($id);
        $name = hospitalModel::get($id);
        require_once('views/booking/index_datebook.php');
    }

    public function checkbook()
    {
        $max_id = $_GET['max_id'];
        $userid = $_GET['userid'];
        //$id = $_GET['Hid'];
        

        $booking = MaxperdayModel::get($max_id);
        require_once('views/booking/checkbook.php');
    }

    public function time(){
        $userid = $_GET['userid'];
        $hid = $_GET['Hid'];
        
        $d = $_GET['post'];
        $s = $_GET['show'];
        
  
        $dmyList = maxModel::getd($hid);
        $timeList = perdayModel::get($hid,$d);
        $name = hospitalModel::get($hid);
        $countList = countModel::getsum();
        
        require_once('views/booking/timebook.php');
    }

    public function addBooking(){
        $userid = $_GET['userid'];
        $maxid = $_GET['maxid'];
        $allList = allBookingModel::get($userid);
        bookingModel::add($maxid,$userid);
        require_once('views/history/index_history.php');
    }
    



     
}?>