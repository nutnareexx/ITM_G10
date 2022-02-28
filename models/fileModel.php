<?php

class fileModel{
    public $fid;
    public $fname;
    public $fdate;
    public $frid;


public function __construct($id,$name,$date,$rid){
    $this->fid = $id;
    $this->fname =$name;
    $this->fdate = $date;
    $this->frid = $rid;
}

public static function get($rid)
{
    require("connection_connect.php");
    $sql = " SELECT * FROM `uploadfile` WHERE r_id ='$rid' ";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $fid = $my_row['fileID'];
    $fname = $my_row['fileupload'];   
    $fdate = $my_row['dateup'];
    $frid = $my_row['r_id'];
    
    require("connection_close.php");

    return new fileModel($fid,$fname,$fdate,$frid);
}

}
?>