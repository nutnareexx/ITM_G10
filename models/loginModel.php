<?php
class loginModel{
    public $uid;
    public $pw;
    public $permission;

    public function __construct($id,$p,$permission)
    {
        $this->uid = $id;
        $this->pw = $p;
        $this->permission = $permission;
        
    }

    public static function get($id){
        require("connection_connect.php");
        $sql="SELECT * FROM `userlogin` WHERE user_id='$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $uid = $my_row['user_id'];
        $pw = $my_row['password'];
        $permission = $my_row['permision'];
        require("connection_close.php");

        return new loginModel($uid,$pw,$permission);

    }

    public static function getAll(){
        $loginList =[];
        require("connection_connect.php");
        $sql="SELECT * FROM `userlogin`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $uid = $my_row['user_id'];
            $pw = $my_row['password'];
            $permission = $my_row['permision'];
            $loginList[] = new loginModel($uid,$pw,$permission);
        }
        require("connection_close.php");
        return $loginList;

    }

    public static function add($id,$pass){
        echo "Add ".$id.$pass." -";
        require("connection_connect.php");
        $sql = "INSERT INTO `userlogin`(`user_id`, `password`) 
        VALUES ('$id','$pass')";

        $result = $conn->query($sql);
        require("connection_close.php");

        return "ADD success $result rows";
    }
}
?>