<?php

class bookingModel{
    public $bid;
    public $maxid;
    public $userid;


public function __construct($bid,$max,$u){
    $this->bid = $bid;
    $this->maxid = $max;
    $this->userid = $u;
}

public static function add($maxid,$userid){
    require("connection_connect.php");
        $sql = "INSERT INTO `booking`( `max_id`, `user_id`) 
        VALUES ('$maxid','$userid')";

        $result = $conn->query($sql);
        require("connection_close.php");

        return "ADD success $result rows";
}


}
?>