<?php

use LDAP\Result;

class Results{
    public $id;
    public $rs;
    public $uid;
    public $hid;
public function __construct($id,$rs,$uid,$hid)
{
    $this->id = $id;
    $this->rs = $rs;
    $this->uid = $uid;
    $this->hid = $hid;
}

public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM `results` NATURAL JOIN user NATURAL JOIN hostpital WHERE user_id = '$id' ";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $id = $my_row[r_id];
    $rs = $my_row[results];
    $uid = $my_row[user_id];
    $hid = $my_row[Hid];
    require("connection_close.php");

    return new Result($id,$rs,$uid,$hid);
}

public static function getAll()
{
    $resultList=[];
    require("connection_connect.php");
    $sql = "SELECT * FROM `results` NATURAL JOIN user NATURAL JOIN hostpital";
    $result = $conn->query($sql);
    while($my_row=$result->fetch_assoc()) {
        $id = $my_row[r_id];
        $rs = $my_row[results];
        $uid = $my_row[user_id];
        $hid = $my_row[Hid];
        $resultList[]=new Results($id,$rs,$uid,$hid);
    }
    require("connection_close.php");

    return $resultList;
}

public static function add($id,$rs,$uid,$hid)
{
    require("connection_connect");
    $sql = "INSERT INTO `results`(`r_id`, `results`, `user_id`, `Hid`) 
    VALUES ($id,$rs,$uid,$hid)";
    $result = $conn->query($sql);
    require("connection_close.php");

    return "add success $result rows";
}

}
?>