<html>
    <head> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" >
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

    <style>
        
        /* Font */
        .try2{
            text-align:center;
            font-family: 'Prompt', sans-serif;
        }

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
                width: 28%;
                margin-top: 20px;
                margin-left: 140px;
            }

            /* Right column */
        .rightcolumn {
                float: right;
                width: 50%;
                /*background-color: #f1f1f1;*/
                /*padding-left: 20px;*/
                margin-top: 20px;
                margin-right: 150px;
            }

            /* Clear floats after the columns */
        .row:after {
                content: "";
                display: table;
                clear: both;
            }

        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 80%;
            background-color: #f2f2f2;
            }

        #customers td, #customers th {
            /* border: 1px solid #ddd; */
            padding: 8px;
            }

        /* #customers tr:nth-child(even){background-color: #f2f2f2;} */

        /* #customers tr:hover {background-color: #ddd;} */

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0974ba;
            color: white;
        }

        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
            }
            
        img {
            text-align: center;
            background-color: none;
            /*padding: 10px 10px 10px 10px;
            margin: 10px 10px 10px 10px;*/
        }

    </style>



    <body>


        <div class="topnav">
            <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
            <a href="?controller=user&action=logoutUser&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
            <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

            <?php echo $userid?>

        </div>
        <br>

    <table id="customers" class="center">
                <tr>
                    <th>ข้อมูลส่วนตัว</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <div class="circle">
                            <img src="pic/account.png" width="150" height="150">
                        </div>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td align=right><b>เลขบัตรประชาชน : </b></td>
                                <td><?php echo "$userid";?></td>
                            </tr>
                            <tr>
                                <td align=right><b>ชื่อ-นามสกุล : </b></td>
                                <td><?php echo "$user_List->id_name$user_List->uname   $user_List->usurname";?></td>
                            </tr>
                            <tr>
                                <td align=right><b>เบอร์โทรศัพท์ : </b></td>
                                <td><?php echo "$user_List->uphone";?></td>
                            </tr>
                            <tr>
                                <td align=right><b>วัน/เดือน/ปีเกิด : </b></td>
                                <td><?php echo "$user_List->udob";?></td>
                            </tr>
                            <tr>
                                <td align=right><b>E-mail : </b></td>
                                <td><?php echo "$user_List->umail";?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
        </table>

    
    </body>
</html>


