<?php
class userModel{
    public $uid;
    public $id_name;
    public $uname;
    public $usurname;
    public $udob;
    public $uphone;
    public $umail;

    public function __construct($id,$prename,$name,$surname,$dob,$phone,$mail)
    {
        $this->uid = $id;
        $this->id_name = $prename;
        $this->uname = $name;
        $this->usurname = $surname;
        $this->udob = $dob;
        $this->uphone = $phone;
        $this->umail = $mail;
        
    }

    public static function get($id){
        require("connection_connect.php");
        $sql="SELECT u.user_id,nt.name_nt,u.user_name,u.user_surname,u.user_dateOfbirth,u.user_phone,u.user_mail 
            FROM user AS u NATURAL JOIN names_title AS nt";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $uid = $my_row['user_id'];
        $id_name = $my_row['name_nt'];
        $uname = $my_row['user_name'];
        $usurname = $my_row['name_surname'];
        $udob = $my_row['name_dateOfbirth'];
        $uphone = $my_row['name_phone'];
        $umail = $my_row['name_mail'];
        require("connection_close.php");

        return new userModel($uid,$id_name,$uname,$usurname,$udob,$uphone,$umail);

    }

    public static function getAll(){
        $userList =[];
        require("connection_connect.php");
        $sql="SELECT u.user_id,nt.name_nt,u.user_name,u.user_surname,u.user_dateOfbirth,u.user_phone,u.user_mail 
            FROM user AS u NATURAL JOIN names_title AS nt";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $uid = $my_row['user_id'];
            $id_name = $my_row['name_nt'];
            $uname = $my_row['user_name'];
            $usurname = $my_row['name_surname'];
            $udob = $my_row['name_dateOfbirth'];
            $uphone = $my_row['name_phone'];
            $umail = $my_row['name_mail'];
            $userList[] = new userModel($uid,$id_name,$uname,$usurname,$udob,$uphone,$umail);
        }
        require("connection_close.php");
        return $userList;
        
        

    }
}
?>