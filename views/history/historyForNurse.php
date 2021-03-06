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
            padding: 8px;
            text-align: center;
            }

        #customers tr:hover {
            background-color: #80b0cf;
        }

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

        .try2{
            font-family: 'Prompt', sans-serif;
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
           /* display: inline-block;*/
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            float: right;
        }

        .card {
        text-align: center;
        font-family: 'Prompt', sans-serif;
        font-size: 18px;
       background-color: #f2f2f2;
        /*padding: 0px;*/
        margin-top: 10px;
        /* margin-left: 100px; */
        width: 50%;
        border-radius: 10px;
    }

    .center {
            text-align: center;
            border: none;
            margin: auto;
            width: 30%;
            padding: 10px;

            }
        
            
    </style>

<div class="topnav">
<a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> ??????????????????????????????????????????????????? </a>
                <a href="?controller=results&action=indexNurse&userid=<?php echo $userid;?>"> ??????????????????????????? </a>
                <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid;?>"> ??????????????????????????? </a>
                <a href="?controller=history&action=indexNurse&userid=<?php echo $userid;?>"> ??????????????????????????????????????? </a>
                <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid;?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
                <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid;?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>
                <form method="get" action="">

                <div class="btn-group2">
                    <input type="text" name="key">
                    <input type="hidden" name="controller" value="history"/>
                    <input type="hidden" name="userid" value="<?php echo $userid?>"/>
                    <button class="button" type="submit" name="action" value="searchN"> 
                    <i class='fas fa-search' style='font-size: 24px'></i> </button>
                </div>    
                </form>
                
            </div>
          

   
        <div class="try1 center">
            <h1>???????????????????????????????????????</h1>
            
            <table  id="customers" align=center>
                <?php 
                foreach($showallList as $s)
                { 
                    echo "<tr> <td><a href=?controller=history&action=historyN&userid=$userid&date=$s->d>?????????????????? $s->df</a> </td>
                    </tr>";
                }

                echo "</table>"
                ?>
        </div>

</html>