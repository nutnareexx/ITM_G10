
<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

    <style>
        .header {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 40px;
            text-align: center;
        }

        .try1{
            font-family: 'Prompt', sans-serif;
            text-align: center;
            
        }

        .try2{
            font-family: 'Prompt', sans-serif;
            padding: 20px;
            text-align: center;
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

        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 80%;
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
            margin: 8px 0;
            font-size: 16px;
            /*display: inline-block;*/
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            float: right;
        }
        .card {
                    font-family: 'Prompt', sans-serif;
                    background-color: none;
                    padding: 20px;
                    margin-top: 20px;
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
                <a href="?controller=user&action=logout&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
                <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>
                <form method="get" action="">
                <input type="text" name="key">
                    <input type="hidden" name="controller" value="hospital"/>
                    <input type="hidden" name="userid" value="<?php echo $userid ;?>"/>
                <div class="btn-group2">
                    
                    <button class="button" type="submit" name="action" value="search">
                    <i class='fas fa-search' style='font-size: 24px'></i> </button>
                </div>
                </form>

                <?php echo $userid?>

                
            </div>

            <br>
<body>
    <center>
        <div class="try1">
            
            <h3>new Hospital <a href="?controller=hospital&action=newhospital&userid=<?php echo $userid;?>">click!!!</a></h3>
            
             </div>    
             
            <table border = 1 id="customers">
            <tr>
            <th><b>ชื่อโรงพยาบาล</th>
            <th><b>เวลาเปิด-ปิดทำการ</th>
            <th><b>ราคาตรวจ RT-PCR</th>
            <th><b>Update</th>
            <th><b>Delete</th> </tr>
            <?php foreach( $hospitalmodelList as $hospitallist)
            {
                echo "<tr> <td>$hospitallist->H_name</td>
                <td>$hospitallist->H_time_open - $hospitallist->H_time_close</td>
                <td>$hospitallist->H_price</td> 
                <td align=center>  <a href=?controller=hospital&action=updateforms&Hid=$hospitallist->Hid&userid=$userid>
                <i class='fas fa-edit' style='font-size: 24px;'></i> </a> </td>
                <td align=center>  <a href=?controller=hospital&action=deleteconfirm&Hid=$hospitallist->Hid&userid=$userid>
                <i class='fas fa-trash-alt' style='font-size: 24px;'></i></a> </td></tr>";
            }
            echo "</table>";
            ?>
        
        
    </center>
</body>
        


    
</html>




