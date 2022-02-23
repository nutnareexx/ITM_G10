<?php
class userModel{
    public $uid;
    public $id_name;
    public $uname;
    public $usurname;
    public $udob;
    public $uphone;
    public $umail;

    public function __construct($id,$prename,$name,$surname,$dob
    ,$phone,$mail)
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
        
    }
}
?>