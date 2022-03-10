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

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        input[type=time], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        input[type=date], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
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
            }
    </style>

<div class="topnav">
                <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
                <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
                <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
                <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
                <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>

                <?php echo $userid?>
            </div>

<div class="card center" >
    <br>
    <b><?php echo "$m->H_name ";?> <br></b>
    <br>
    <form method="get"action="">
        <table align="center">
            <tr>
                <td align="right">วันที่ : </td>
                <td><label>  <input type="date" name="max_date"  
                value="<?php echo $m->max_date;?>"/></label></td>
            </tr>
            <tr>
                <td align="right">เวลาเปิดทำการ : </td>
                <td><label>  <input type="time" name="max_topen"
                value="<?php echo $m->max_topen;?>"/></label></td>
            </tr>
            <tr>
                <td align="right">เวลาปิดทำการ : </td>
                <td><label> <input type="time" name="max_tclose"
                value="<?php echo $m->max_tclose;?>"/></label></td>
            </tr>
            <tr>
                <td align="right">จำนวนที่รับได้ : </td>
                <td><label>  <input type="text" name="max"
                value="<?php echo $m->max_num;?>"/></label></td>
            </tr>
        </table>
<br>
        <div class="btn-group">
                <input type="hidden" name="controller" value="maxperday"/>
                <input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
                <input type="hidden" name="Hid" value="<?php echo $m->Hid;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <button class="button" type="submit" name="action" value="indexNurse">กลับ</button>
                <button class="button" type="submit" name="action" value="update"> บันทึก </button>
        </div>
        

    
    </form> 
</div>
        
    
</html>



