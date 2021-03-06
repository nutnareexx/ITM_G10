<?php

class userController
{
    public function index()
    {
        $userid = $_GET['userid'];
        $user_List = userModel::get($userid);
        $userList = userModel::getAll();
        require_once('views/user/index_user.php');
    }

    public function indexAdmin()
    {
        $userid = $_GET['userid'];
        $user_List = userModel::get($userid);
        $userList = userModel::getAll();
        require_once('views/user/index_admin.php');
    }

    public function indexlogin(){
        require_once('views/login/index_login.php');
    }

    public function indexuser(){
        $userid = $_GET['userid'];
        $user_List = userModel::get($userid);
        $userList = userModel::getAll();
        require_once('views/pages/home.php');
    }


    public function signin(){
        $prenameList = prenameModel::getAll();
        require_once('views/user/newuser.php');
    }

    public function adduser(){
        $userList = userModel::getAll();
        $id = $_GET['uid'];
        $preid = $_GET['preid'];
        $name = $_GET['uname'];
        $surname = $_GET['usurname'];
        $dob = $_GET['udob'];
        $phone = $_GET['uphone'];
        $mail = $_GET['umail'];
        $check = 0;

        // echo strlen($id);
         if(strlen($id)==13){
            foreach ($userList as $u){
                if($u->uid==$id){
                    echo "".$u->uid. ", ".$id;
                    echo " have user ";
                    $check = 1;
                    break;
                }
                else{
                    $check = 0;
                }  
            }

            if($check == 1){
                userController::error();
            }
            else{
                userModel::add($id,$preid,$name,$surname,$dob,$phone,$mail);
                userController::newpassword($id);
            }
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('เลขบัตรประชาชนไม่ถูกต้อง');";
            echo "window.location.assign('http://localhost/ITM_G10/index.php?controller=user&action=signin');";

            echo "</script>";

        }
        

        
    }

    public function error(){
        require_once('views/login/error.php');
    }

    public function newpassword($id){
        $this->id = $id;
        require_once('views/login/newlogin.php');
    }

    public function addpassword(){
        $id = $_GET['id'];
        $password = $_GET['password'];
        $confirm = $_GET['confirm'];

        //$check = 0;
        if($password == $confirm){
            loginModel::add($id,$password);
            require_once('views/login/index_login.php');
        }
        else{
            // echo "<script type='text/javascript'>";
            // echo "alert('เลขบัตรประชาชนไม่ถูกต้อง');";
            // echo "window.location.assign('http://localhost/ITM_G10/index.php?uid=$id&preid=$preid&uname=$name&usurname=$surname&udob=$dob&uphone=$phone&umail=$mail&controller=user&action=adduser');";

            // echo "</script>";
            require_once('views/login/newlogin.php');
        }
    }

    public function login(){
        $logList = loginModel::getAll();
        $prenameList = prenameModel::getAll();
        $userid = $_GET['username'];
        $pass = $_GET['password'];
        $c = 0;

        foreach($logList as $log){
            if($log->uid == $userid){
                $c=1;
                //require_once("views/login/index_login.php");
                break;
            }
        }

        if($c == 1){
            $loginList = loginModel::get($userid);
            if($loginList->pw == $pass){
                if($loginList->permission == 'N'){
                    $maxperday_list = MaxperdayModel::getAll();
                    require_once('views/max_per_day/index_maxperday.php');
                }
                else if($loginList->permission == 'G'){
                    $hospitalmodelList = hospitalModel::getAll();
                    require_once('views/booking/index_booking.php');
                }
                
            }
            else{
                // echo "<br> WRONG PASSWORD ";
                // echo "<script type='text/javascript'>";
                // echo "alert('รหัสผ่านผิดพลาด');";
                // echo "window.location.assign('http://localhost/ITM_G10/index.php?controller=user&action=indexlogin')";
                // echo "</script>";
                

               require_once("views/login/wrongpass.php");
            
            // userController::indexlogin();
            }
            
        }
        if($c == 0){
            echo "<br> DON'T HAVE";
            //userController::indexlogin();
            echo "<script type='text/javascript'>";
            echo "window.onload = function () {";
            echo "var r = confirm('ไม่มีบัญชีผู้ใช้ กด OK เพื่อลงทะเบียนใหม่');";
            echo " if (r == true) {";
            echo "x = '';"; 
            echo "}";   
            echo " else {";
            echo "window.location.assign('http://localhost/ITM_G10/index.php?controller=user&action=indexlogin');";
            echo "}";
            echo "document.getElementById('demo').innerHTML = x;";
            echo "}";
            echo "</script>";
            echo "<p id='demo'></p>";

            require_once("views/user/newuser.php");
        }
        
      
    }  

    public function logoutNurse() 
    {
        $userid = $_GET['userid'];
        $user_List = userModel::get($userid);
        $userList = userModel::getAll();
        require_once("views/login/index_logoutN.php");
    }

    public function logoutUser() 
    {
        $userid = $_GET['userid'];
        $user_List = userModel::get($userid);
        $userList = userModel::getAll();
        require_once("views/login/index_logoutU.php");
    }
}

?>