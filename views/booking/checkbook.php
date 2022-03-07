<html>
<head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>

        .card {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            /*margin-top: 20px;*/
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #0974ba;
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
            }
    </style>

<body>
    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        <?php echo $userid?>
    </div>

    <div class="card center">
        <div class="btn-group">
            <?php 
                echo "<br>ต้องการจอง<br>
                <br>โรงพยาบาล : $booking->H_name
                <br>วันที่ : $booking->max_date
                <br>เวลาเปิดทำการ : $booking->max_topen - $booking->max_tclose";
            ?>
            
            <form method="get" action=""><br>
                <input type="hidden" name="controller" value="booking"/>
                <input type="hidden" name="maxid" value="<?php echo $booking->max_id;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <input type="hidden" name="Hid" value="<?php echo $booking->Hid;?>"/>
                <button class="button" type="submit" name="action" value="bookdate"> ยกเลิก </button>
                <button class="button" type="submit" name="action" value="addBooking"> ยืนยัน </button>
            </form>
        </div>
        
    </div>
</body>


    
</html>
