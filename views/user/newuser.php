<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

        <style>
            * {
                box-sizing: border-box;
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

            .try2{
                text-align:center;
                font-family: 'Prompt', sans-serif;
            }

            .header {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                text-align: center;
            }

            .btn-group .button {
                font-family: 'Prompt', sans-serif;
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

            .cardright {
                text-align:right;
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 10px;
                /*margin-top: 10px;*/
            }
            .cardleft {
                text-align:left;
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 10px;
                margin-top: 10px;
            }

            .cardin {
        
                /*font-family: 'Prompt', sans-serif;
                font-size: 16px;*/
                background-color: black;
                padding: 1px;
                margin-top: 1px;
            }
            

            .card2 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                
               
            }

            .card3 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                font-size: 17px;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
            }

            .circle{
                text-align: center;
                background-color: #f1f1f1;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
             
            }
            
            img {
                border-radius: 50%;
            }

            /* Create two unequal columns that floats next to each other */
            /* Left column */
            .leftcolumn {   
                float: left;
                width: 70%;
                
            }

            /* Right column */
            .rightcolumn {
                float: right;
                width: 29%;
                background-color: #f1f1f1;
                /*padding-left: 20px;*/
                margin-top: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
            input[type=text], select {
                font-family: 'Prompt', sans-serif;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 50px;
                box-sizing: border-box;
            }

            input[type=date], select {
                font-family: 'Prompt', sans-serif;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 50px;
                box-sizing: border-box;
            
            }
        </style>
  

<body>

<div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        <!--<?php echo $userid?>-->
    </div>


    <div class="row">
        <!--<div class="leftcolumn">-->
            <div class="card2">
            <form method="get" action="">
                    <label> เลขบัตรประชาชน ( ไม่ต้องใส่ขีด )<input  type="text" name="uid"/> </label>
                    <br>
                    
                    <label> คำนำหน้าชื่อ 
                        <select name="preid"> 
                        <option value="">  </option>
                        <?php foreach($prenameList as $pre){
                            echo "<option value=$pre->id> $pre->name </option>";
                        }
                        ?>
                        </select>
                    </label>
                    
                    <br>
                    <label> ชื่อ <input  type="text" name="uname"/> </label>
                    <br>
                    <label> นามสกุล <input  type="text" name="usurname"/> </label>
                    <br>
                    <label> วันเดือนปีเกิด <input  type="date" name="udob"/> </label>
                    <br>
                    <label> เบอร์โทรศัพท์ <input  type="text" name="uphone"/> </label>
                    <br>
                    <label> E-mail <input  type="text" name="umail"/> </label>
                    <br>
                   
                    <div class="cardright">
                        <div class="btn-group" align="center">
                            <input type="hidden" name="controller" value="user"/>
                            <button class="button" type="submit" name="action" value="indexlogin"> กลับ </button>
                            <button class="button" type="submit" name="action" value="adduser"> ต่อไป </button>
                        </div>
                    </div>
            </div>   
            </form>
            
            <!--</div>-->
        

        <!--<div class="rightcolumn">
            <div class="circle">
                <img src="pic/account.png" width="150" height="150">
            </div>

            <div class="card3">
                <br>
                เลขบัตรประชาชน : 
                <br><br>
                ชื่อ-นามสกุล :
                <br><br>
                เบอร์โทรศัพท์ :
                <br><br>
                E-mail :
            </div>
        </div>-->
    

    </div>
</body>
    
</html>