<?php
class perdayModel {
    public $mid;
    public $d;
    public $month;
    public $year;
    public $start;
    public $end;
    public $num;
    public $hid;

    public function __construct($id,$day,$m,$y,$s,$e,$n,$hid)
    {
        $this->mid = $id;
        $this->d = $day;
        $this->month = $m;
        $this->year = $y;
        $this->start = $s;
        $this->end = $e;
        $this->num = $n;
        $this->hid = $hid;

    }
    public static function getdate($id)
    {
        $perList = [];
        require("connection_connect.php");
        $sql = "SELECT m.max_id,DAY(m.date) AS dday ,MONTH(m.date) AS mm,YEAR(m.date) AS yy,
        TIME_FORMAT(m.time_open,'%H : %i') AS op,TIME_FORMAT(m.time_close,'%H:%i') AS cl,m.max,m.Hid 
        FROM `max_per_day`AS m 
        WHERE m.Hid='$id'
        GROUP BY DAY(m.date),MONTH(m.date),YEAR(m.date);";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $mid = $my_row['max_id'];
            $d = $my_row['dday'];
            $month = $my_row['mm'];
            $year = $my_row['yy'];
            $start = $my_row['op'];
            $end = $my_row['cl'];
            $num = $my_row['max'];
            $hid = $my_row['Hid'];
            $perList[] = new perdayModel($mid,$d,$month,$year,$start,$end,$num,$hid);
        //echo $mid,$day,$month,$year,$start,$end,$num,$hid;
        }
    
        
        require("connection_close.php");
        return $perList;
        //echo $mid,$day,$month,$year,$start,$end,$num,$hid;

        //return new perdayModel($mid,$day,$month,$year,$start,$end,$num,$hid);
    }
}
?>