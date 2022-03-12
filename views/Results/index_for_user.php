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
            border-radius: 10px;
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
        
            
    </style>
    
    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=history&action=index&userid=<?php echo $userid;?>"> ประวัติการจอง </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=logoutUser&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        
    </div><br>
            

    <div class="row">        
        <!--<div class="leftcolumn">-->
            
                <table border=1 id="customers" align="center">
                <tr> 
                        <!--<th>ลำดับที่</th>
                        <th>เลขบัตรประชาชน</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</td>
                        <th>นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมลล์</th>-->
                        <th><b>โรงพยาบาล</th>
                        <th><b>ผลการตรวจ</th>
                        <th><b>ดาวน์โหลด</th>
                        </tr>
                    <?php
                    {
                        echo "<tr> 
                        
                        <td>$resultsList->hname</td>
                        <td>$resultsList->rs</td>
                        <td> <a href='up/$fileList->fname'> $fileList->fname </a>  </td>
                        </tr>";
                    }
                    echo "</table> "
                    ?> 
                <!--<form method="get" action="">
                    <div class="btn-group">
                        <input type="hidden" name="controller" value="user"/>
                        <input type="hidden" name="userid" value="<?php echo $resultsList->uid?>"/>
                        <button class="button" type="submit" name="action" value="indexuser">Back</button>
                        </div>
                </form> -->    
          
            
        <!--</div>-->
        
        <!--<div class="rightcolumn">
            <div class="circle">
                <img src="pic/account.png" width="150" height="150">
            </div>

            <div class="card3">
                <?php echo "
                <br>
                เลขบัตรประชาชน : $resultsList->uid
                <br><br>
                ชื่อ-นามสกุล : $resultsList->pname$resultsList->name   $resultsList->sname
                <br><br>
                เบอร์โทรศัพท์ : $resultsList->phone
                <br><br>
                E-mail : $resultsList->mail"
                ?>
            </div>
            
        </div>-->
            
    </div>
    
    
</html>
    