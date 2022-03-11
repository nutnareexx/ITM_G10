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

        table {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 20px 20px 20px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            text-align: center;
            padding: 8px;
        }

        th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #0974ba;
            color: white;
        }

        /*td:hover {
            background-color: #ddd;
        }*/

        #cus table {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        /*#cus tr  {
            border: 1px solid #ddd;
            padding: 8px;
            
            }*/
        
        #cus td:hover {
            background-color: #ddd;
        }

        .button {
            position: relative;
            background-color: #0974ba ; 
            border: 1px black;
            color: white;
            width: 100%;
            height: 100%;
            /* padding: 10px; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            /*float: center;*/
            border-radius: 50px;
        }

        .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .button:hover {
            background-color: #ddd;
            color: black;
        }

         /* a:link, a:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

         a:hover, a:active {
            background-color: red;
        } */

        
        

        input[type=text], select {
                font-family: 'Prompt', sans-serif;
                width: 95%;
                padding: 20px 20px 20px 20px;
                margin-top: 20px ;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16;
            }
        
            
    </style>

            <div class="topnav">
    
            <a href="?controller=booking&action=index&userid=<?php echo $userid;?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexUser&userid=<?php echo $userid;?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid;?>"> โรงพยาบาล </a>
            <a href="?controller=user&action=logoutUser&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
            <a href="?controller=user&action=indexUser&userid=<?php echo $userid;?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        

        </div>
        
        <a href="?controller=booking&action=time&userid=<?php echo $userid;?>&Hid=<?php echo $name->Hid ;?>">try</a>


    <div class="try2">
        <br>
        <h2><?php echo $name->H_name ;?></h2>
        <h3>วันที่ : <?php echo $s ;?></h3>
    </div>
    
    <table  id="customers" align="center">
        
        <tr> 
            <th>เวลานัด</th>
            <th>จำนวนที่จองไปแล้ว / จำนวนที่รับได้ต่อวัน</th>
            <th>จอง</th>
        </tr>
        <?php 
        
        foreach($timeList as $t)
        {
            $p=0;
            $x=0;
            echo "<tr> 
        
            <td>$t->start - $t->end</td>";
            echo "<td>";
            foreach($countList as $c){
                if($c->mid == $t->mid){
                    $p=1;
                    echo $c->c." / ".$t->num;
                    break;
                }
            }
            if($p == 0){
                echo "0 / ".$t->num ;
            }
            
            echo"</td>";
            
            echo "<td>";
            foreach($countList as $c){
                if($c->mid == $t->mid){
                    if($c->c == $t->num){
                        $x=1;
                        echo "<a  href=''>เต็ม</a>";
                        break;
                    }
                    // else{
                    //     $x=0;
                    //     echo " <a  href=?controller=booking&action=checkbook&max_id=$t->mid&userid=$userid> จอง </a>" ; 
                    // }

                }
            }
            if($x == 0){
                echo " <a  href=?controller=booking&action=checkbook&max_id=$t->mid&userid=$userid> จอง </a>" ;
            }

            echo "</td>
            </tr>";
        }
        echo "</table> ";
    ?>

</html>