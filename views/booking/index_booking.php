
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
        /*display: inline-block;*/
        border: 1px solid #ccc;
        border-radius: 50px;
        box-sizing: border-box;
        float: right;
    }

    .card2 {
        font-family: 'Prompt', sans-serif;
        background-color: #f1f1f1;
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
            
               
    }
    .table {
        text-align: center;
        border-collapse: collapse;
        width: 50%;
        float: center;
    }

    .th, td {
        text-align: center;
        padding: 8px;
        float: center;
    }
    /*tr:nth-child(odd) {background-color: #f2f2f2;}*/

    table {
    border-collapse: collapse;
    width: 30%;
    }

    th, td {
    padding: 8px;
    text-align: center;
    /*border-bottom: 1px solid #ddd;*/
    
    }

    tr:hover {
        background-color: #80b0cf;
        color: red;
    }

    a :link{
        color: #0974ba;
    }

    a:hover {
        color:#f1f1f1;
    }

  
    
    
</style>

<body>
    
    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexUser&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>
        
            <form method="get" action="">
                <div class="btn-group2">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="booking"/>
                <input type="hidden" name="userid" value="<?php echo $userid?>"/>
                <button class="button" type="submit" name="action" value="search">
                <i class='fas fa-search' style='font-size: 24px'></i> </button>
            </form> 
        </div>

        <?php echo $userid?>
    </div><br>
            
    

    
        <div class="try1">
            
            <table  id="customers" align="center">
            <?php 
            foreach($hospitalmodelList as $hospital)
            { 
                echo "<tr> <td><a href=?controller=booking&action=bookdate&Hid=$hospital->Hid&userid=$userid >$hospital->H_name</a> </td>
                </tr>";
            }

            echo "</table>"
            ?>
        </div>

        
            
  
      


        
        
    
    


    </body>

</html>    








