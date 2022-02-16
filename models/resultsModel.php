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
    $sql = "SELECT * FROM `results`";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $rs = $my_row[r_id];
    $id = $my_row[results];
    $uid = $my_row[user_id];
    $hid = $my_row[Hid];
    require("connection_close.php");

    return new Result($id,$rs,$uid,$hid);
}

public static function getAll()
{
    $resultList=[];
    require("connection_connect.php");
    $sql = "SELECT * FROM `results`";
    $result = $conn->query($sql);
    while($my_row=$result->fetch_assoc()) {
        $rs = $my_row[r_id];
        $id = $my_row[results];
        $uid = $my_row[user_id];
        $hid = $my_row[Hid];
        $resultList[]=new Results($id,$rs,$uid,$hid);
    }
    require("connection_close.php");

    return $resultList;
}


}