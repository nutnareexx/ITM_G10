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
                <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
                <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>

                
            </div>

            <br>
    
<body>
    <div class="card center">
        <table align="center">
            <tr>
                <td align ="right"><?php echo "ลำดับที่ : "?></td>
                <td><?php echo "$resultss->id"?></td>
            </tr>
            <tr>
                <td align ="right"><?php echo "ชื่อ : "?></td>
                <td><?php echo "$resultss->pname$resultss->name   $resultss->sname"?></td>
            </tr>
            <tr>
                <td align ="right"><?php echo "เบอร์โทรศัพท์ : "?></td>
                <td><?php echo "$resultss->phone"?></td>
            </tr>
            <tr>
                <td align ="right"><?php echo "โรงพยาบาล : "?></td>
                <td><?php echo "$resultss->hname"?></td>
            </tr>
            <tr>
                <td align ="right"><?php echo "ผลการตรวจ : "?></td>
                <td><?php echo "$resultss->rs"?></td>
            </tr>
            
        </table>
            
        <br>
        <div class="btn-group">    
            <form method="get" action="">
                <input type="hidden" name="controller" value="results"/>
                <input type="hidden" name="id" value="<?php echo $resultss->id;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <button class="button" type="submit" name="action" value="indexNurse"> กลับ </button>
                <button class="button" type="submit" name="action" value="deleteNurse"> ลบ </button>
            </form>
        </div>

    </div>
</body>
    
        
</html>
