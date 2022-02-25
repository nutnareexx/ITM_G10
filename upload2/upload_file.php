<?php

class UploadFile {
    public $FileID;

public function __construct($FileID) {
    $this->$FileID = $FileID;
}

public static function upload($FileID) {
    require("connection_connect.php");
    //upload file
    $ext = pathinfo(basename($_FILES['FileID']['name']), PATHINFO_EXTENSION);
    $new_name = 'result_'.$FileID.".".$ext;
    $file_path = "upload2/";
    $upload_path = $file_path.$new_name;
    //uploading
    $success = move_uploaded_file($_FILES['FileID']['tmp_name'],$upload_path);
    if($success == false)
    {
        echo "ไม่สามารถอัพโหลดได้";
        exit();
    }

    $FileID = $new_name ;
    $sql = "INSERT INTO `uploadnewfile`(`FileID`) VALUES ('$FileID')";
    $result = $conn->query($dbcon,$sql);
    $my_row = $result->fetch_assoc();
    $FileID = $my_row['FileID'];
    require("connection_close.php");
}

    
}
    

?>