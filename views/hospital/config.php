<?php
$con = mysqli_connect("localhost","root","","ITM_G10");

if(!$con){
    echo "Connection Failed" . mysqli_connect_error();
}
?>