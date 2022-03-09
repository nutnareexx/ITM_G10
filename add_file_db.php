
<?php
	//1. เชื่อมต่อ database: 

use LDAP\Result;

	require("connection_connect.php"); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

	//$fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
	$fileupload = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');

	//ฟังก์ชั่นวันที่
			date_default_timezone_set('Asia/Bangkok');
		$date = date("Ymd");

	//ฟังก์ชั่นสุ่มตัวเลข
			$numrand = (mt_rand());

	//เพิ่มไฟล์
	$upload=$_FILES['fileupload'];
	if($upload != '') {   //not select file มีการอัพโหลดไฟล์เข้ามา

		//โฟลเดอร์ที่จะ upload file เข้าไป 
		$path="up/";  

		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['fileupload']['name'],".");
			
		$id = $_POST['id'];
		$uid = $_POST['uid'];
		$userid = $_POST['userid'];
		$resultsList = $_POST['resultsList'];
		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		//$id=$_GET['id'];
		$newname = "result_".$uid.$type;
		$path_copy=$path.$newname;
		$path_link="up/".$newname;

		//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
		move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
		// เพิ่มไฟล์เข้าไปในตาราง uploadfile
		
			$sql = "INSERT INTO `uploadfile`( `fileupload`, `r_id`) 
			VALUES ('$newname','$id')";
			
			$result = $conn->query($sql);
		
		require("connection_close.php");
		// javascript แสดงการ upload file
		
		if($result){
			$userid;
			echo "<script type='text/javascript'>";
			echo "alert('Upload File Succesfuly');";
			echo "window.location.assign('http://localhost/ITM_G10/index.php?controller=results&action=indexNurse&userid=$userid')";
			echo "</script>";

		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Error back to upload again');";
			echo "window.location = 'index.php'; ";
			echo "</script>";
	}
?>