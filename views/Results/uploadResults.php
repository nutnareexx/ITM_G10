<html>
  <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  </head>
 
  <style>
    .header {
      font-family: 'Prompt', sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
    }

    .topnav {
            overflow: hidden;
            background-color:#0974ba;
        }

    /* Style the topnav links */
    .topnav a {
            font-family: 'Prompt', sans-serif;
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

    .btn-group .button {
      font-family: 'Prompt', sans-serif;
      position: relative;
      background-color: #0974ba ; /* Green */
      border: 1px black;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      /*float: center;*/
      border-radius: 50px;
    }

    .btn-group .button:not(:last-child) {
      border-right: none; /* Prevent double borders */
    }

    .btn-group .button:hover {
      background-color: #ddd;
      color: black;
     }

    .card2 {
      font-family: 'Prompt', sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
      width: 50%;
      border-radius: 10px;
    }
    input[type=file], select {
      font-family: 'Prompt', sans-serif;
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 50px;
      box-sizing: border-box;
    }

    .center {
            text-align: center;
            border: none;
            margin: auto;
            width: 60%;
            padding: 10px;

            }

    
  </style>

<div class="topnav">
  <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
  <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
  <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
  <a href="?controller=history&action=indexNurse&userid=<?php echo $userid;?>"> รายชื่อผู้จอง </a>
  <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
  <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
  <i class='fas fa-user-alt' style='font-size:24px'></i></a>

</div>
<br>

<div class="card2 center">
  <form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
    <center>
      <div class="btn-group">
      <label>
        <input class="button" type="file" name="fileupload" id="fileupload"  required="required"/><br>
      </label>
      <br>
  </div>
  <div class="btn-group" >
      <input type="hidden" name="id" value="<?php echo $re->id;?>"/>
      <input type="hidden" name="uid" value="<?php echo $re->uid;?>"/>
      <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
      <input type="hidden" name="resultsList[]" value="<?php echo $resultsList;?>"/>
      <button class="button" type="submit" name="button" id="button" value="upResult"> เพิ่มไฟล์ </button>
      </div>
      <br>
  </form>
  <form method="get" action="">
    <div class="btn-group">
    <input type="hidden" name="controller" value="results"/>
    <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
    <button class="button" type="submit" name="action" value="indexNurse">กลับ</button>
    </div>
  </form>
    </center>
  
</div>
</html>