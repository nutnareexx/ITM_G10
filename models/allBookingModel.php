<?php
class allBookingModel{
    public $mid;
    public $bid;
    public $uid;
    public $d;
    public $start;
    public $end;
    public $hname;
    public $hprice;
    public $nt;
    public $uname;
    public $sname;
    public $phone;
    public $mail;

    public function __construct($id,$bid,$uid,$d,$start,$end,$name,$hprice,$nt,$uname,$sname,$phone,$mail)
    {
        $this->mid = $id;
        $this->bid = $bid;
        $this->uid = $uid;
        $this->d = $d;
        $this->start = $start;
        $this->end = $end;
        $this->hname = $name;
        $this->hprice = $hprice;
        $this->$nt = $nt;
        $this->$uname = $uname;
        $this->$sname = $sname;
        $this->$phone = $phone;
        $this->$mail = $mail;
    }

    public static function get($uid){
        $allList = [];
        require("connection_connect.php");
        $sql = "SELECT m.max_id,b.bid,b.user_id,nt.name_nt,u.user_name,u.user_surname,
        u.user_phone,u.user_mail,h.H_price,DATE_FORMAT(m.date,'%d/%m/%Y') AS d, 
        TIME_FORMAT(m.time_open,'%H:%i') AS s,TIME_FORMAT(m.time_close,'%H:%i') AS e,
        h.H_name FROM `booking` AS b NATURAL JOIN max_per_day AS m NATURAL JOIN hostpital AS h 
        NATURAL JOIN user AS u NATURAL JOIN names_title AS nt WHERE user_id='$uid';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $mid = $my_row['max_id'];
            $bid = $my_row['bid'];
            $uid = $my_row['user_id'];
            $d = $my_row['d'];
            $start = $my_row['s'];
            $end = $my_row['e'];
            $hname = $my_row['H_name'];
            $hprice = $my_row['H_price'];
            $nt = $my_row['name_nt'];
            $uname = $my_row['user_name'];
            $sname = $my_row['user_surname'];
            $phone = $my_row['user_phone'];
            $mail = $my_row['user_mail'];
            $allList[] = new allBookingModel($mid,$bid,$uid,$d,$start,$end,$hname,$hprice,$nt,$uname,$sname,$phone,$mail);
        }
        require("connection_close.php");
        return $allList;
    }

    public static function search($key)
    {
        $allList = [];
        require("connection_connect.php");
        $sql = "SELECT m.max_id,b.bid,b.user_id,nt.name_nt,u.user_name,u.user_surname,u.user_phone,u.user_mail,h.H_price,DATE_FORMAT(m.date,'%d/%m/%Y') AS d,
        TIME_FORMAT(m.time_open,'%H:%i') AS s,TIME_FORMAT(m.time_close,'%H:%i') AS e,h.H_name
        FROM `booking` AS b NATURAL JOIN max_per_day AS m NATURAL JOIN hostpital AS h NATURAL JOIN user AS u
        NATURAL JOIN names_title AS nt WHERE ( m.max_id LIKE '%$key%' OR b.bid LIKE '%$key%' 
       OR b.user_id LIKE '%$key%' OR h.H_price LIKE '%$key%' OR m.date LIKE '%$key%' OR m.time_open LIKE '%$key%' OR
        m.time_close LIKE '%key%' OR h.H_name LIKE '%key%' OR u.id_nt LIKE '%$key%' OR u.user_name LIKE '%$key%' OR 
        u.user_surname LIKE '%$key%' OR u.user_phone LIKE '%$key%' OR u.user_mail LIKE '%$key%' OR nt.name_nt LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $mid = $my_row['max_id'];
            $bid = $my_row['bid'];
            $uid = $my_row['user_id'];
            $d = $my_row['d'];
            $start = $my_row['s'];
            $end = $my_row['e'];
            $hname = $my_row['H_name'];
            $hprice = $my_row['H_price'];
            $nt = $my_row['name_nt'];
            $uname = $my_row['user_name'];
            $sname = $my_row['user_surname'];
            $phone = $my_row['user_phone'];
            $mail = $my_row['user_mail'];
            $allList[] = new allBookingModel($mid,$bid,$uid,$d,$start,$end,$hname,$hprice,$nt,$uname,$sname,$phone,$mail);
        }
        require("connection_close.php");
        return $allList;
    }
}
?>