<?php
class perdayModel {
    public $mid;
    public $d;
    public $m;
    public $y;
    public $start;
    public $end;
    public $num;
    public $hid;

    public function __construct($id,$x,$s,$e,$n,$hid)
    {
        $this->mid = $id;
        $this->d = $x;
        $this->start = $s;
        $this->end = $e;
        $this->num = $n;
        $this->hid = $hid;

    }
    public static function get($hid,$did)
    {
        $timeList = [];
        require("connection_connect.php");
        $sql = "SELECT m.max_id AS id ,m.date,TIME_FORMAT(m.time_open,'%H:%i') AS op,TIME_FORMAT(m.time_close,'%H:%i') AS cl,m.max,m.Hid   
        FROM `max_per_day`AS m 
        WHERE m.Hid='$hid' AND m.date LIKE '$did'";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $mid = $my_row['id'];
            $d = $my_row['date'];
            $start = $my_row['op'];
            $end = $my_row['cl'];
            $num = $my_row['max'];
            $hid = $my_row['Hid'];
            $timeList[] = new perdayModel($mid,$d,$start,$end,$num,$hid);
        }
        require("connection_close.php");
        return $timeList;
    }

}
?>