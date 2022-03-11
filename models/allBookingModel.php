<?php
class allBookingModel{
    public $mid;
    public $bid;
    public $uid;
    public $d;
    public $start;
    public $end;
    public $hname;

    public function __construct($id,$bid,$uid,$d,$start,$end,$name)
    {
        $this->mid = $id;
        $this->bid = $bid;
        $this->uid = $uid;
        $this->d = $d;
        $this->start = $start;
        $this->end = $end;
        $this->hname = $name;
    }

    public static function get($uid){
        $allList = [];
        require("connection_connect.php");
        $sql = "SELECT m.max_id,b.bid,b.user_id,DATE_FORMAT(m.date,'%d/%m/%Y') AS d,
        TIME_FORMAT(m.time_open,'%H:%i') AS s,TIME_FORMAT(m.time_close,'%H:%i') AS e,h.H_name
        FROM `booking` AS b NATURAL JOIN max_per_day AS m NATURAL JOIN hostpital AS h
        WHERE user_id='$uid';";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $mid = $my_row['max_id'];
            $bid = $my_row['bid'];
            $uid = $my_row['user_id'];
            $d = $my_row['d'];
            $start = $my_row['s'];
            $end = $my_row['e'];
            $hname = $my_row['H_name'];
            $allList[] = new allBookingModel($mid,$bid,$uid,$d,$start,$end,$hname);
        }
        require("connection_close.php");
        return $allList;
    }
}
?>