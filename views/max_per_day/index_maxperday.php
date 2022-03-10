<br>


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
                padding: 40px;
                text-align: center;
            }

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
        
        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 70%;
            }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #0974ba;
            color: white;
            }
        .try1{
            font-family: 'Prompt', sans-serif;
            text-align: center;
            
        }

        .center {
            text-align: center;
            border: none;
            }
        
        .btn-group .button {
            /*border-radius: 5%;*/
            position: relative;
            background-color: #0974ba ; /* Green */
            border: 1px black;
            color: white;
            padding: 15px 32px;
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

        .btn-group2 .button {
            /*border-radius: 5%;*/
            position: sticky ;
            background-color: #0974ba ; /* Green */
            border: 1px black;
            color: white;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: right;
        }

        .btn-group2 .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group2 .button:hover {
            /*background-color: #ddd;*/
            color: black;
        }

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 30%;
            padding: 5px 10px;
            margin: 8px 0px;
            font-size: 16px;
            /*display: inline-block;*/
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            float: right;
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
                
                <form method="get" action="" >
                    <label>
                    <div class="btn-group2">
                        <input type="text" name="key">
                        
                        <input type="hidden" name="controller" value="maxperday"/>
                        <input type="hidden" name="userid" value="<?php echo $userid?>"/>
                    
                        
                        <button class="button" type="submit" name="action" value="search"> 
                        <i class='fas fa-search' style='font-size: 24px'></i> </button>
                    </label>    
                    </div>
                </form>
                
                
                
               
                 
                
                        
                    
                

                <?php echo $userid?>
    </div>
            <br>

    <body>
            
        <div class="try1">
            <h3> เพิ่มข้อมูล <a href="?controller=maxperday&action=newMaxperday&userid=<?php echo $userid?>"> คลิกที่นี่!!! </a> </h3>
        </div>

            
            
        <center>
            <table border = 1 id="customers">
                <tr> <th>โรงพยาบาล</th> 
                <th>วันที่</th>
                <th>เวลาเปิด-ปิดทำการ</th>
                <th>จำนวนที่รับได้ต่อวัน</th>
                <th>แก้ไข</th>
                <th>ลบ</th></tr>
                <?php foreach($maxperday_list as $m)
            {

                echo "<tr> <td>$m->H_name</td>
                <td>$m->max_date</td>
                <td>$m->max_topen - $m->max_tclose</td>
                <td>$m->max_num</td>
                <td align=center> <a href=?controller=maxperday&action=updateForm&max_id=$m->max_id&userid=$userid>
                <i class='fas fa-edit' style='font-size: 24px;'></i></a></td>
                <td align=center> <a href=?controller=maxperday&action=deleteConfirm&max_id=$m->max_id&userid=$userid>
                <i class='fas fa-trash-alt' style='font-size: 24px;'></i></td>
                </tr>";
            }


            echo "</table> "
            ?>
        </center>
            

        </div>
    </body>
    
</html>

