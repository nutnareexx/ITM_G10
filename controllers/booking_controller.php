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

    public function bookdate(){
        $id = $_GET['Hid'];
        $userid = $_GET['userid'];
        $dmyList = maxModel::get($id);
        $date = MaxperdayModel::s($id);
        $name = hospitalModel::get($id);
        $dayList = perdayModel::getd($id);
        $monthList = perdayModel::getm($id);
        $yearList = perdayModel::gety($id);
        require_once('views/booking/index_datebook.php');
    }

    public function checkbook()
    {
        $max_id = $_GET['max_id'];
        $userid = $_GET['userid'];
        //$id = $_GET['Hid'];
        echo $max_id;
        $booking = MaxperdayModel::get($max_id);
        require_once('views/booking/checkbook.php');
    }

    public function time(){
        //$max_id = $_GET['max_id'];
        $userid = $_GET['userid'];
        $hid = $_GET['Hid'];
        $g= $_GET['post'];
        echo $hid;
        $dmyList = maxModel::get($hid);
        //$booking = MaxperdayModel::get($max_id);
        $dayList = perdayModel::getd($hid);
        $monthList = perdayModel::getm($hid);
        $yearList = perdayModel::gety($hid);
        require_once('views/booking/timebook.php');
    }

    public function addBooking(){
        $userid = $_GET['userid'];
        $maxid = $_GET['maxid'];
        bookingModel::add($maxid,$userid);
        require_once('views/pages/home.php');
    }
    



     
}?>