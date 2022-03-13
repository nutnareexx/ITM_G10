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
        require_once('views/history/index_history.php');
        // historyController::index();
    }

    public function indexNurse() {
        $userid = $_GET['userid'];
        $showallList = dateModel::getdate();
        require_once('views/history/historyForNurse.php');
    }

    public function historyN() {
        $userid = $_GET['userid'];
        $date = $_GET['date'];
        $dateList = showallModell::getAll($date);
        require_once('views/history/historydetail.php');
    }

    public function searchN()
    {
        $key = $_GET['key'];
        $date = $_GET['date'];
        $userid = $_GET['userid'];
        $dateList = showallModell::search($key,$date);
        //require_once('views/hospital/indexhospital.php');
        require_once('views/history/historydetail.php');
        // historyController::index();
    }
}
?>