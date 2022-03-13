
<?php
class hospitalModel{
    public $Hid;
    public $H_name;
    public $H_time_open;
    public $H_time_close;
    public $H_price;

    public function __construct($Hid,$H_name,$H_time_open,$H_time_close,$H_price)
    {
      $this->Hid = $Hid;
      $this->H_name = $H_name;
      $this->H_time_open = $H_time_open;
      $this->H_time_close = $H_time_close;
      $this->H_price = $H_price;  
    }

    public static function get($Hid)
    {
        require("connection_connect.php");
        $sql = "SELECT h.Hid, h.H_name, TIME_FORMAT(h.H_time_open,'%H:%i') AS Ho, 
        TIME_FORMAT(h.H_time_close,'%H:%i') AS Hcl, h.H_price FROM `hostpital` AS h
        WHERE h.Hid = '$Hid'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Hid = $my_row['Hid'];
        $H_name = $my_row['H_name'];
        $H_time_open = $my_row['Ho'];
        $H_time_close = $my_row['Hcl'];
        $H_price = $my_row['H_price'];
        require("connection_close.php");

        return new hospitalModel($Hid,$H_name,$H_time_open,$H_time_close,$H_price);
    }

    public static function getAll()
    {
        $hospitalmodelList = [];
        require("connection_connect.php");
        $sql = "SELECT h.Hid, h.H_name,  TIME_FORMAT(h.H_time_open,'%H:%i') AS Ho, 
        TIME_FORMAT(h.H_time_close,'%H:%i') AS Hcl, h.H_price FROM `hostpital` AS h";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Hid = $my_row['Hid'];
            $H_name = $my_row['H_name'];
            $H_time_open = $my_row['Ho'];
            $H_time_close = $my_row['Hcl'];
            $H_price = $my_row['H_price'];
            $hospitalmodelList[] = new hospitalModel($Hid,$H_name,$H_time_open,$H_time_close,$H_price);
        }
        require("connection_close.php");
        return $hospitalmodelList;
    }

    public static function search($key)
    {
        $hospitalmodelList = [];
        require("connection_connect.php");
        $sql = "SELECT h.Hid, h.H_name,  TIME_FORMAT(h.H_time_open,'%H:%i') AS Ho, 
        TIME_FORMAT(h.H_time_close,'%H:%i') AS Hcl, h.H_price FROM `hostpital` AS h WHERE (Hid like '%$key%' or H_name like '%$key%' or H_time_open like '%$key%' 
        or H_time_close like '%$key%' or H_price like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Hid = $my_row['Hid'];
            $H_name = $my_row['H_name'];
            $H_time_open = $my_row['Ho'];
            $H_time_close = $my_row['Hcl'];
            $H_price = $my_row['H_price'];
            $hospitalmodelList[] = new hospitalModel($Hid,$H_name,$H_time_open,$H_time_close,$H_price);
        }
        require("connection_close.php");
        return $hospitalmodelList;
    }

    public static function Add($Hid,$H_name,$H_time_open,$H_time_close,$H_price)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `hostpital`(`Hid`, `H_name`, `H_time_open`, `H_time_close`, `H_price`) 
        VALUES ('$Hid','$H_name','$H_time_open','$H_time_close','$H_price')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }
    
    public static function update($Hid,$H_name,$H_time_open,$H_time_close,$H_price)
    {
        require("connection_connect.php");
        $sql = "UPDATE `hostpital` 
        SET `H_name`='$H_name',`H_time_open`='$H_time_open',`H_time_close`='$H_time_close',`H_price`='$H_price' 
        WHERE Hid = '$Hid' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($Hid)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `hostpital` WHERE Hid = '$Hid'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}
?>