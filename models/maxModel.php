<?php
class maxModel {
    public $mid;
    public $d;
    public $month;
    public $year;
    public $start;
    public $end;
    public $num;
    public $hid;

    public function __construct($d,$m,$y,$hid)
    {
        $this->d = $d;
        $this->month = $m;
        $this->year = $y;
        $this->hid = $hid;

    }
    public static function getd($id)
    {
        $dmyList = [];
        require("connection_connect.php");
        $sql = "SELECT DATE_FORMAT(m.date,'%d') AS dday ,DATE_FORMAT(m.date,'%m') AS mm,DATE_FORMAT(m.date,'%Y')AS yy,m.Hid 
        FROM `max_per_day`AS m 
        WHERE m.Hid='$id'
        GROUP BY DAY(m.date) ,MONTH(m.date),YEAR(m.date);";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            
            $d = $my_row['dday'];
            $month = $my_row['mm'];
            $year = $my_row['yy'];
            $hid = $my_row['Hid'];
            $dmyList[] = new maxModel($d,$month,$year,$hid);
        }
        require("connection_close.php");
        return $dmyList;
    }
    public function gett($hid,$did){
        $timeList = [];
        require("connection_connect.php");
        $sql = "SELECT DATE_FORMAT(m.date,'%d') AS dday ,DATE_FORMAT(m.date,'%m') AS mm,DATE_FORMAT(m.date,'%Y')AS yy,m.Hid 
        FROM `max_per_day`AS m 
        WHERE m.Hid='$hid' AND m.date='$did'
        GROUP BY DAY(m.date) ,MONTH(m.date),YEAR(m.date);";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            
            $d = $my_row['dday'];
            $month = $my_row['mm'];
            $year = $my_row['yy'];
            $hid = $my_row['Hid'];
            $dmyList[] = new maxModel($d,$month,$year,$hid);
        }
        require("connection_close.php");
        return $timeList;
    }


}
?>