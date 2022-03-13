<html>
<head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    </head>

    <style>
         /* Style the top navigation bar */
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


        .card {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            width: 50%;
            border-radius: 10px;
        }
        .btn-group .button {
            font-family: 'Prompt', sans-serif;
            position: relative;
            background-color: #0974ba; /* Green */
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

        input[type=password], select {
            font-family: 'Prompt', sans-serif;
            width: 15%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
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

        table, td {
            height: 40px;
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
    <div class="card center">
        <table align="center">
            <tr>
                <td align="right">โรงพยาบาล : </td>
                <td><?php echo "$m->H_name"?></td>
            </tr>
            <tr>
                <td align="right">วันที่ : </td>
                <td><?php echo "$m->max_date"?></td>
            </tr>
            <tr>
                <td align="right">เวลาเปิดทำการ : </td>
                <td><?php echo "$m->max_topen"?></td>
            </tr>
            <tr>
                <td align="right">เวลาปิดทำการ : </td>
                <td><?php echo "$m->max_tclose"?></td>
            </tr>
            <tr>
                <td align="right">จำนวนที่รับได้ต่อวัน : </td>
                <td><?php echo "$m->max_num"?></td>
            </tr>
        </table>
          <br>
        <div class="btn-group">    
            <form method="get" action="">
                <input type="hidden" name="controller" value="maxperday"/>
                <input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <button class="button" type="submit" name="action" value="indexNurse"> กลับ </button>
                <button class="button" type="submit" name="action" value="delete"> ลบ </button>
            </form>
        </div>
        
    </div>
    
</html>

