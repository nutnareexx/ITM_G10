<?php
class historyController{
    public function index(){
        $userid = $_GET['userid'];
        $allList = allBookingModel::get($userid);
        require_once("views/history/index_history.php");
    }
}
?>