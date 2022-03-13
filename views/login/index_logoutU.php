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
            font-family: 'Prompt', sans-serif;
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
            width: 50%;
        }

        .btn-group .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group .button:hover {
            background-color: #ddd;
            color: black;
        }

        .btn-group2 .button {
            font-family: 'Prompt', sans-serif;
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

    .card {
        text-align: center;
        font-family: 'Prompt', sans-serif;
        font-size: 20px;
       /* background-color: white;*/
        /*padding: 0px;*/
        margin-top: 10px;
        margin-left: 100px;
        
    }

    .card2 {
        font-family: 'Prompt', sans-serif;
        background-color: #f1f1f1;
        padding: 20px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
       
    }

    .leftcolumn {
        font-family: 'Prompt', sans-serif;
                float: left;
                width: 48%;
                margin-top: 100px;
                text-align: center;
                /*text-shadow: 3px 2px 6px black;*/
               
            }

    /* Right column */
    .rightcolumn {
                float: right;
                margin-top: 50px;
                width: 48%;
                
            }

    /* Clear floats after the columns */
    .row:after {
                content: "";
                display: table;
                clear: both;
            }
    
    img {
        text-align: center;
        /*background-color: none;
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;*/
    }

    html { 
        background: url("pic/o.jpg") ; 
        background-size: 100% 100%;

    }
    
        

    </style>
   

    <div class="topnav">
                <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
                <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
                <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
                <a href="?controller=user&action=logout&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
             
                <a href="?controller=user&action=indexuser&userid=<?php echo $userid?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>
               
                
    </div>
            

<body>

    <div class="row">
        <div class="leftcolumn">
            <div class="card" align="center">
            <br><br>คุณแน่ใจใช่ไหมว่าต้องการลงชื่อออก?<br><br>
                <form method="get" action="" >
                    <div class="btn-group">
                        <input type="hidden" name="controller" value="user"/>
                        <button class="button" type="submit" name="action" value="indexlogin"> ใช่ </button>
                    </div>
                </form>
                <form method="get" action="" >
                    <div class="btn-group">
                        <input type="hidden" name="controller" value="booking"/>
                        <input type="hidden" name="userid" value="<?php echo $userid ;?>"/>
                        <button class="button" type="submit" name="action" value="index"> ไม่ </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- <div class="rightcolumn">
                <div class="img">
                    <img src="pic/Sanitizing mat-pana.png" width="500" height="500">
                </div>
            
            
        </div> -->

            
                
                
            
    </div>
        
</body>

    
    
 
    
</html>

