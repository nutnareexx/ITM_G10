<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
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
            background-color: #333;
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
            background-color: #333;
            color: white;
            }

        .btn-group .button {
            /*border-radius: 5%;*/
            position: relative;
            background-color: #333 ; /* Green */
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

        .card2 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
            }
        
        .card3 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                font-size: 15px;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
            }

        .circle{
                text-align: center;
                background-color: #f1f1f1;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
             
            }
        
        
        
        .leftcolumn {   
                float: left;
                width: 65%;
                
            }

            /* Right column */
        .rightcolumn {
                float: right;
                width: 29%;
                background-color: #f1f1f1;
                /*padding-left: 20px;*/
                /*margin-top: 20px;*/
            }

            /* Clear floats after the columns */
        .row:after {
                content: "";
                display: table;
                clear: both;
            }

        .try2{
            text-align:center;
            font-family: 'Prompt', sans-serif;
        }
        
            
    </style>

        <br>

        <div class="header">
            <h1> จองการตรวจ RT-PCR </h1>
        </div>

            <div class="topnav">
            <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>

        <?php echo $userid?>

        </div>
        


<center>
    <div class="try2">
        <br>
        <h2><?php echo $name->H_name ;?></h2>
    </div>
    
    <table border = 1 id="customers">
        
            <tr> 
                        <th>วันที่</th>
                        <th>เวลานัด</th>
                        <th>จำนวนที่รับได้ต่อวัน</th>
                        <th>จอง</th>
                    </tr>
                    

                    <?php foreach($date as $booking)
                        {
                            echo "<tr> 
                            <td>$booking->max_date</td>
                            <td>$booking->max_topen - $booking->max_tclose</td>
                            <td>$booking->max_num</td>
                            <td> <a href=?controller=booking&action=checkbook&max_id=$booking->max_id&userid=$userid> จอง </a></td>
                            </tr>";
                        }


                        echo "</table> "
                    ?>
        </center>
        
</html>
