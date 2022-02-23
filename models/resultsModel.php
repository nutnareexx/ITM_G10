<?php

use LDAP\Result;

class Results{
    public $id;
    public $rs;
    public $uid;
    public $hid;
    public $nt;
    public $name;
    public $sname;
    public $hname;
    public $phone;
    public $mail;
public function __construct($id,$rs,$uid,$hid,$nt,$name,$sname,$hname,$phone,$mail)
{
    $this->id = $id;
    $this->rs = $rs;
    $this->uid = $uid;
    $this->hid = $hid;
    $this->nt = $nt;
    $this->name = $name;
    $this->sname = $sname;
    $this->hname = $hname;
    $this->phone = $phone;
    $this->mail = $mail;
}

public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM `results` NATURAL JOIN user NATURAL JOIN hostpital NATURAL JOIN names_Title WHERE user_id = '$id' ";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $id = $my_row['r_id'];
    $rs = $my_row['results'];
    $uid = $my_row['user_id'];
    $hid = $my_row['Hid'];
    $nt = $my_row['name_nt'];
    $name = $my_row['user_name'];
    $sname = $my_row['user_surname'];
    $phone = $my_row['user_phone'];
    $mail = $my_row['user_mail'];
    $hname = $my_row['H_name'];
    require("connection_close.php");

    return new Results($id,$rs,$uid,$hid,$nt,$name,$sname,$hname,$phone,$mail);
}

public static function getAll()
{
    $resultList=[];
    require("connection_connect.php");
    $sql = "SELECT * FROM `results` NATURAL JOIN user NATURAL JOIN hostpital NATURAL JOIN names_Title";
    $result = $conn->query($sql);
    while($my_row=$result->fetch_assoc()) {
        $id = $my_row['r_id'];
        $rs = $my_row['results'];
        $uid = $my_row['user_id'];
        $hid = $my_row['Hid'];
        $nt = $my_row['name_nt'];
        $name = $my_row['user_name'];
        $sname = $my_row['user_surname'];
        $phone = $my_row['user_phone'];
        $mail = $my_row['user_mail'];
        $hname = $my_row['H_name'];
        $resultList[]=new Results($id,$rs,$uid,$hid,$nt,$name,$sname,$hname,$phone,$mail);
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