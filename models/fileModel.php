<?php

class fileModel{
    public $fid;
    public $fname;
    public $fdate;
    public $frid;
    public $re;
    public $hname;


public function __construct($id,$name,$date,$rid,$re,$n){
    $this->fid = $id;
    $this->fname =$name;
    $this->fdate = $date;
    $this->frid = $rid;
    $this->re = $re;
    $this->hname = $n;
}

public static function get($uid)
{
    $rList = [];
    require("connection_connect.php");
    $sql = " SELECT u.fileID,u.fileupload,u.dateup,u.r_id,r.results,h.H_name FROM `uploadfile`AS u NATURAL JOIN results AS r NATURAL JOIN hostpital AS h
    WHERE r.user_id = '$uid'; ";
    $result = $conn->query($sql);
    while($my_row = $result->fetch_assoc()){
        $fid = $my_row['fileID'];
        $fname = $my_row['fileupload'];   
        $fdate = $my_row['dateup'];
        $frid = $my_row['r_id'];
        $re = $my_row['results'];
        $hname = $my_row['H_name'];
        $rList[] = new fileModel($fid,$fname,$fdate,$frid,$re,$hname);
    }
    
    
    require("connection_close.php");

    return $rList;
}

}
?>