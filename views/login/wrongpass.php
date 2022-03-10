<html>

<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    
</head>

<style>
    html { 
        background: url("pic/bg3.png") ; 
        background-size: cover;

    }
    img {
        text-align: center;
        background-color: none;
        /*padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;*/
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
        box-shadow: 3px 2px 8px gray;
        border-radius: 50px;
    }

    .btn-group .button:not(:last-child) {
        border-right: none; /* Prevent double borders */
    }

    .btn-group .button:hover {
        background-color: #ddd;
        color: black;
    }

    .card {
        text-align: left;
        font-family: 'Prompt', sans-serif;
        /*font-size: 16px;*/
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
                
                /*padding-left: 20px;
                margin-top: 20px;*/
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
        padding: 12px 10px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
        box-shadow: 3px 2px 8px #837d7d;
    }

    input[type=password], select {
        font-family: 'Prompt', sans-serif;
        width: 100%;
        padding: 12px 10px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
        box-shadow: 3px 2px 8px #837d7d;
    }

    .alert {
        padding: 15px;
        background-color: #f44336;
        color: white;
    }
                  
    

</style>

<body>
    

    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

       
    </div>

    <div class='alert'>
                  
                  <strong>รหัสผ่านผิดพลาด!</strong> โปรดกรอกเลขบัตรประชาชนและรหัสผ่านใหม่
                </div>

<div class="row">
    <div class="leftcolumn">
            <div class="card">
                <form method="get" action="">
                <div class="btn-group" align="center"> 
                    <table>
                        <tr>
                             <td align="right">เลขบัตรประชาชน</td>
                             <td> <label>  <input type="text"  name="username"/> </label></td>
                        </tr>
                        <tr>
                            <td align="right">รหัสผ่าน</td>
                            <td><label>  <input type="password" name="password"/> </label></td>
                        </tr>
                       
                    </table> 
        <br>
                
                    <input type="hidden" name="controller" value="user"/>
                        <button class="button" type="submit" name="action" value="login" id="myBtn"> เข้าสู่ระบบ </button><br><br>
                            <!--<button type="submit" class="btn">Login</button>-->
                            <!--<button class="button" type="button" class="btn cancel" onclick="closeForm()">Close</button>-->
                            สมัครสมาชิกใหม่ <?php echo "<a href=?controller=user&action=signin> SIGN UP </a> ";?>
                </form>
                </div>         
            </div>
    </div>    

    <div class="rightcolumn">
        <div class="img">
            <img src="pic/amico.png" width="500" height="500">
        </div>
    </div>

    <br><br>
                <div class="card">
                    username : 12345 password : 12345 General
                    <br>
                    username : 888 password : admin Admin
                    
                </div>
</div>                
                <br><br>
    

        
        
    </form>

           
</body>
</html>