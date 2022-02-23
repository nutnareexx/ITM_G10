<p>Max per day</p>
<?php
class MaxperdayModel{
    public $max_id;
    public $max_date;
    public $max_topen;
    public $max_tclose;
    public $max_num;
    public $Hid;
    public $H_name;

    public function __construct($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid,$H_name)
    {
        $this->max_id = $max_id;
        $this->max_date = $max_date;
        $this->max_topen = $max_topen;
        $this->max_tclose = $max_tclose;
        $this->max_num = $max_num;
        $this->Hid = $Hid;
        $this->H_name = $H_name;
    }

    public static function get($max_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `max_per_day` WHERE max_id = $max_id";
        $result = $result->query($sql);
        $my_row = $result->fetch_assoc();
        $max_id = $my_row['max_id'];
        $max_date = $my_row['date'];
        $max_topen = $my_row['time_open'];
        $max_tclose = $my_row['time_close'];
        $max_num = $my_row['max'];
        $Hid = $my_row['Hid'];
        $H_name = $my_row['H_name'];
        require("connection_close.php");

        return new MaxperdayModel($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid,$H_name);
    }

    public static function getAll()
    {
        //echo "1";
        $maxperday_list = [];
        require("connection_connect.php");
        $sql = "SELECT h.H_name,m.Hid,m.max_id, m.date,m.time_open, m.time_close,m.max
        FROM max_per_day AS m NATURAL JOIN hostpital AS h WHERE m.Hid=h.Hid;";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $max_id = $my_row['max_id'];
            $max_date = $my_row['date'];
            $max_topen = $my_row['time_open'];
            $max_tclose = $my_row['time_close'];
            $max_num = $my_row['max'];
            $Hid = $my_row['Hid'];
            $H_name = $my_row['H_name'];
            $maxperday_list[] = new MaxperdayModel($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid,$H_name);
        }
        require("connection_close.php");
        return $maxperday_list;
    }

    public static function search($key)
    {
        $maxperday_list = [];
        require("connection_connect.php");
        $sql = "SELECT h.H_name,m.Hid,m.max_id,m.date,m.time_open, m.time_close,m.max
        FROM max_per_day AS m NATURAL JOIN hostpital AS h WHERE 
        ( m.date like '%$key%' or m.time_open like '%$key%' 
        or m.time_close like '%$key%' or m.max like '%$key%' or h.Hid like '%$key%' or h.H_name like '%$key%')
        and m.Hid=h.Hid";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $max_id = $my_row['max_id'];
            $max_date = $my_row['date'];
            $max_topen = $my_row['time_open'];
            $max_tclose = $my_row['time_close'];
            $max_num = $my_row['max'];
            $Hid = $my_row['Hid'];
            $H_name = $my_row['H_name'];
            $maxperday_list[] = new MaxperdayModel($max_id,$max_date,$max_topen,$max_tclose,$max_num,$Hid,$H_name);
        }
        require("connection_close.php");
        return $maxperday_list;
    }

    


}
?>