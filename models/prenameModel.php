<?php
class prenameModel{
    public $id;
    public $name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function get($id){
        require("connection_connect.php");
        $sql="SELECT * FROM `names_title` WHERE id_nt = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['id_nt'];
        $name = $my_row['name_nt'];
        require("connection_close.php");

        return new prenameModel($id,$name);
    }

    public static function getAll(){
        $pernameList =[];
        require("connection_connect.php");
        $sql="SELECT * FROM `names_title`";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){
            $my_row = $result->fetch_assoc();
            $id = $my_row['id_nt'];
            $name = $my_row['name_nt'];
            $pernameList[] = new prenameModel($id,$name);
        }
        
        require("connection_close.php");
        return $prenameList;
    }

}
?>