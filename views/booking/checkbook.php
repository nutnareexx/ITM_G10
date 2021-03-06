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
            width: 50%;
            border-radius: 10px;
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
            margin: auto;
            width: 60%;
            padding: 10px;

            }
    </style>

<body>
    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> ????????????????????? RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ??????????????????????????? </a>
        <a href="?controller=history&action=index&userid=<?php echo $userid;?>"> ??????????????????????????????????????? </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> ??????????????????????????? </a>
        <a href="?controller=user&action=logoutUser&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        
    </div>
    <br>

    <div class="card center">
        <div class="btn-group">
            <?php 
                echo "<br>??????????????????????????????<br>
                <br>??????????????????????????? : $booking->H_name
                <br>?????????????????? : $booking->max_date
                <br>??????????????????????????????????????? : $booking->max_topen - $booking->max_tclose";
            ?>
            
            <form method="get" action=""><br>
                <input type="hidden" name="controller" value="booking"/>
                <input type="hidden" name="maxid" value="<?php echo $booking->max_id;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <input type="hidden" name="Hid" value="<?php echo $booking->Hid;?>"/>
                <button class="button" type="submit" name="action" value="bookdate"> ?????????????????? </button>
                <button class="button" type="submit" name="action" value="addBooking"> ?????????????????? </button>
            </form>
        </div>
        
    </div>
</body>


    
</html>
