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
        $date = MaxperdayModel::s($id);
        $name = hospitalModel::get($id);
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

    public function addBooking(){
        $userid = $_GET['userid'];
        $maxid = $_GET['maxid'];
        bookingModel::add($maxid,$userid);
        require_once('views/pages/home.php');
    }



     
}?>