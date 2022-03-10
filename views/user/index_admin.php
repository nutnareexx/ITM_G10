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

    </style>



    <body>


        <div class="topnav">
            <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
            <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
            <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

            <?php echo $userid?>

        </div>

        <div class="row">
            <div class="rightcolumn">
                <div class="card3">
                    <?php echo "
                                เลขบัตรประชาชน : $userid
                                <br><br>
                                ชื่อ-นามสกุล : $user_List->id_name$user_List->uname   $user_List->usurname
                                <br><br>
                                เบอร์โทรศัพท์ : $user_List->uphone
                                <br><br>
                                วัน/เดือน/ปีเกิด : $user_List->udob
                                <br><br>
                                E-mail : $user_List->umail<br>";
                                
                ?>
                </div>
                
            </div>
            
            <div class="leftcolumn">
                    <div class="circle">
                        <img src="pic/account.png" width="150" height="150">
                    </div>
            </div> 
            

        </div>

    

    
        

    
    </body>
</html>


