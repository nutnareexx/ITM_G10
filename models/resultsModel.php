<?php

use LDAP\Result;

class Results{
    public $id;
    public $rs;
    public $uid;
    public $hid;
    public $pname;
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
    $this->pname = $nt;
    $this->name = $name;
    $this->sname = $sname;
    $this->hname = $hname;
    $this->phone = $phone;
    $this->mail = $mail;
}

public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT u.user_id,n.name_nt,u.user_name,u.user_surname,u.user_phone, 
    u.user_mail,h.H_name,r.results,r.r_id,h.Hid FROM user AS u NATURAL JOIN names_title AS n
    LEFT OUTER JOIN results AS r ON u.user_id=r.user_id LEFT OUTER JOIN hostpital AS h ON r.Hid=h.Hid 
    WHERE u.user_id='$id'";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $id = $my_row['r_id'];
    $rs = $my_row['results'];
    $uid = $my_row['user_id'];
    $hid = $my_row['Hid'];
    $pname = $my_row['name_nt'];
    $name = $my_row['user_name'];
    $sname = $my_row['user_surname'];
    $phone = $my_row['user_phone'];
    $mail = $my_row['user_mail'];
    $hname = $my_row['H_name'];
    require("connection_close.php");

    return new Results($id,$rs,$uid,$hid,$pname,$name,$sname,$hname,$phone,$mail);
}

public static function getresult($id)
{
    require("connection_connect.php");
    $sql = "SELECT u.user_id,names_title.name_nt,u.user_name,u.user_surname,u.user_phone, 
    u.user_mail,h.H_name,r.results,r.r_id,h.Hid 
    FROM user AS u NATURAL JOIN names_title 
    LEFT OUTER JOIN results AS r ON u.user_id=r.user_id LEFT OUTER JOIN hostpital AS h ON r.Hid=h.Hid 
    WHERE r.r_id='$id'";

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
    $sql = "SELECT u.user_id,n.name_nt,u.user_name,u.user_surname,u.user_phone,u.user_mail, h.H_name,r.results,r.r_id,h.Hid 
    FROM user AS u NATURAL JOIN names_title AS n NATURAL JOIN results AS r NATURAL JOIN hostpital AS h;";
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
    require("connection_connect.php");
    $sql = "INSERT INTO `results`(`r_id`, `results`, `user_id`, `Hid`) 
    VALUES ('$id','$rs','$uid','$hid')";
    $result = $conn->query($sql);
    require("connection_close.php");

    return "add success $result rows";
}

public static function update($id,$hid,$rs)
{
    require("connection_connect.php");
    $sql = "UPDATE `results` SET `results`='$rs',`Hid`='$hid' WHERE `r_id`='$id'";
    $result=$conn->query($sql);
    require("connection_close.php");

    return "update success $result row";
}

public static function delete($id)
{
    require_once("connection_connect.php");
    $sql = "DELETE FROM `results` WHERE r_id='$id'";
    $result = $conn->query($sql);
    require("connection_close.php");

    return "delete success $result row";
}

public static function search($key)
{
    $resultList=[];
    require("connection_connect.php");
    $sql = "SELECT u.user_id,n.name_nt,u.user_name,u.user_surname,u.user_phone,u.user_mail,
    h.H_name,r.results,r.r_id,h.Hid FROM user AS u NATURAL JOIN names_title AS n 
    LEFT OUTER JOIN results AS r ON u.user_id=r.user_id LEFT OUTER JOIN hostpital AS h ON r.Hid=h.Hid
    WHERE (u.user_id LIKE '%$key%' OR n.name_nt LIKE '%$key%' OR u.user_name LIKE '%$key%' OR 
    u.user_surname LIKE '%$key%' OR u.user_phone LIKE '%$key%' OR u.user_mail LIKE '%$key%' OR 
    h.H_name LIKE '%$key%' OR r.results LIKE '%$key%' OR r.r_id LIKE '%$key%')";
    
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
}
?>