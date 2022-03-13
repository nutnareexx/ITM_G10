<?php
class dateModel{

    public $d;
    public $df;

    public function __construct($d,$df)
    {
        $this->d = $d;
        $this->df = $df;
    }
    public static function getdate(){
        $dateList = [];
        require("connection_connect.php");
        $sql = "SELECT m.date,DATE_FORMAT(m.date,'%d/%m/%Y') AS d
        FROM `booking` AS b NATURAL JOIN max_per_day AS m
        GROUP by m.date;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $d = $my_row['date'];
            $df = $my_row['d'];
            $dateList[] = new dateModel($d,$df);
        }
        require("connection_close.php");
        return $dateList;
    }
}
?>