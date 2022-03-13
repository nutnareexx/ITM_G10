<?php

class showallModell{
    public $bid;
    public $userid;
    public $prename;
    public $name;
    public $lastname;
    public $dob;
    public $phone;
    public $mail;
    public $hname;
    public $d;
    public $s;
    public $e;

    public function __construct($bid,$u,$pre,$n,$ln,$dob,$p,$m,$hn,$d,$s,$e)
    {
        $this->bid = $bid;
        $this->userid = $u;
        $this->prename = $pre;
        $this->name = $n;
        $this->lastname = $ln;
        $this->dob = $dob;
        $this->phone = $p;
        $this->mail = $m;
        $this->hname = $hn;
        $this->d = $d;
        $this->s = $s;
        $this->e = $e;
    }

    public static function getAll($date){
        $showallList = [];
        require("connection_connect.php");
        $sql = "SELECT b.bid,u.user_id,n.name_nt,u.user_name,u.user_surname,DATE_FORMAT(u.user_dateOfbirth,'%d/%m/%Y') AS dob,u.user_phone,u.user_mail,h.H_name,
        DATE_FORMAT(m.date,'%d/%m/%Y') AS d,TIME_FORMAT(m.time_open,'%H:%i') AS s,TIME_FORMAT(m.time_close,'%H:%i') AS e
        FROM `booking` AS b NATURAL JOIN max_per_day AS m NATURAL JOIN user AS u NATURAL JOIN names_title AS n NATURAL JOIN hostpital AS h
        WHERE m.date='$date';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $bid = $my_row['bid'];
            $userid = $my_row['user_id'];
            $prename = $my_row['name_nt'];
            $name = $my_row['user_name'];
            $lastname = $my_row['user_surname'];
            $dob = $my_row['dob'];
            $phone = $my_row['user_phone'];
            $mail = $my_row['user_mail'];
            $hname = $my_row['H_name'];
            $d = $my_row['d'];
            $s = $my_row['s'];
            $e = $my_row['e'];
            $showallList[] = new showallModell($bid,$userid,$prename,$name,$lastname,$dob,$phone,$mail,$hname,$d,$s,$e);
        }
        require("connection_close.php");
        return $showallList;
    }

    public static function search($key,$date){
        $showallList = [];
        require("connection_connect.php");
        $sql = "SELECT b.bid,u.user_id,n.name_nt,u.user_name,u.user_surname,DATE_FORMAT(u.user_dateOfbirth,'%d/%m/%Y') AS dob,u.user_phone,u.user_mail,h.H_name,
        DATE_FORMAT(m.date,'%d/%m/%Y') AS d,TIME_FORMAT(m.time_open,'%H:%i') AS s,TIME_FORMAT(m.time_close,'%H:%i') AS e
        FROM `booking` AS b NATURAL JOIN max_per_day AS m NATURAL JOIN user AS u NATURAL JOIN names_title AS n NATURAL JOIN hostpital AS h
        WHERE (b.bid LIKE '%$key%' OR u.user_id LIKE '%$key%' OR n.name_nt LIKE '%$key%' OR u.user_name LIKE '%$key%' 
        OR u.user_surname LIKE '%$key%' OR u.user_dateOfbirth LIKE '%$key%' OR u.user_phone LIKE '%$key%' OR u.user_mail LIKE '%$key%' OR 
        h.H_name LIKE '%$key%' OR m.date LIKE '%$key%' OR m.time_open LIKE '%$key%' OR m.time_close LIKE '%$key%') AND m.date='$date';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $bid = $my_row['bid'];
            $userid = $my_row['user_id'];
            $prename = $my_row['name_nt'];
            $name = $my_row['user_name'];
            $lastname = $my_row['user_surname'];
            $dob = $my_row['dob'];
            $phone = $my_row['user_phone'];
            $mail = $my_row['user_mail'];
            $hname = $my_row['H_name'];
            $d = $my_row['d'];
            $s = $my_row['s'];
            $e = $my_row['e'];
            $showallList[] = new showallModell($bid,$userid,$prename,$name,$lastname,$dob,$phone,$mail,$hname,$d,$s,$e);
        }
        require("connection_close.php");
        return $showallList;
    }
}
?>