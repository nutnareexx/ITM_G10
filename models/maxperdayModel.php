<p>Max per day</p>
<?php
class MaxperdayModel{
    public $max_id;
    public $max_date;
    public $max_topen;
    public $max_tclose;
    public $max_num;
    public $Hid;

    public function __construct($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid)
    {
        $this->max_id = $max_id;
        $this->max_date = $max_date;
        $this->max_topen = $max_topen;
        $this->max_tclose = $max_tclose;
        $this->max_num = $max_num;
        $this->Hid = $Hid;
    }

    public static function get($max_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `max_per_day` WHERE max_id = $max_id";
        $result = $result->query($sql);
        $my_row = $result->fetch_assoc();
        $max_id = $my_row[max_id];
        $max_date = $my_row[date];
        $max_topen = $my_row[time_open];
        $max_tclose = $my_row[time_close];
        $max_num = $my_row[max];
        $Hid = $my_row[Hid];
        require("connection_close.php");

        return new MaxperdayModel($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid);
    }

    public static function getAll()
    {
        $maxperday_list = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `max_per_day`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $max_id = $my_row[max_id];
            $max_date = $my_row[date];
            $max_topen = $my_row[time_open];
            $max_tclose = $my_row[time_close];
            $max_num = $my_row[max];
            $Hid = $my_row[Hid];
            $maxperday_list[] = new MaxperdayModel($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid);
        }
        require("connection_close.php");
        return $maxperday_list;
    }


}
?>