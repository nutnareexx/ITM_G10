<?php
class countModel{
    public $mid;
    public $c;

    public function __construct($mid,$c)
    {
        $this->mid = $mid;
        $this->c = $c;
    }

    public static function getsum(){
        $countList = [];
        require("connection_connect.php");
        $sql = "SELECT b.max_id,COUNT(max_id) AS num
        FROM booking AS b NATURAL JOIN max_per_day AS m
        GROUP BY max_id;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $mid = $my_row['max_id'];
            $c = $my_row['num'];
            $countList[] = new countModel($mid,$c);
        }
        require("connection_close.php");
        return $countList;
    }
}
?>