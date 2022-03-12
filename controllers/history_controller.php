<?php
class historyController{
    public function index(){
        $userid = $_GET['userid'];
        $allList = allBookingModel::get($userid);
        require_once("views/history/index_history.php");
    }

    public function search()
    {
        $key = $_GET['key'];
        $userid = $_GET['userid'];
        $allList = allBookingModel::search($key);
        //require_once('views/hospital/indexhospital.php');
        // require_once('views/history/index_history.php');
        historyController::index();
    }
}
?>