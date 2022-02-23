<?php
class prenameModel{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function get(){
        require("connection_connect.php");
        $sql="SELECT * FROM `names_title`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['id_nt'];
        $name = $my_row['name_nt'];
        require("connection_close.php");

        return new prenameModel($id,$name);
    }
}
?>