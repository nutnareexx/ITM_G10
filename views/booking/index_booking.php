
<html>
<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
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

    input[type=text], select {
        font-family: 'Prompt', sans-serif;
        width: 25%;
        padding: 12px 10px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
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
        width: 100%;
        float: center;
    }

    .th, td {
        text-align: center;
        padding: 8px;
        float: center;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}


    
    
</style>

<body>
    <br>
    <div class="header">
        <h1>  จองการตรวจ RT-PCR </h1>
    </div>
    
    <div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>

        <?php echo $userid?>
    </div><br>
            


    <div class="try1">
        <div class="btn-group">
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="booking"/>
            <input type="hidden" name="userid" value="<?php echo $userid?>"/>
            <button class="button" type="submit" name="action" value="search"> Search </button>
        </form> 
      </div>
    </div><br>  


        
        
    <div class="try1">
        
            <?php 
            foreach($hospitalmodelList as $hospital)
            { 
                /*<input type="hidden" name="controller" value="booking"/>
                //<input type="hidden" name="Hid" value="<?php echo $hospital->Hid?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid?>"/>
                <button class="button" type="submit" name="action" value="bookdate"/> $hospital->H_name </button>*/
                echo "<a href=?controller=booking&action=bookdate&Hid=$hospital->Hid&userid=$userid>$hospital->H_name</a><br>";
            }
            ?>
        <p> -----------------------------</p>
    </div>

    <div class="try1">
        
        <table border = 1 id="customers >
        <?php 
        foreach($hospitalmodelList as $hospital)
        { 
            echo "<tr> <td><a href=?controller=booking&action=bookdate&Hid=$hospital->Hid&userid=$userid>$hospital->H_name</a> </td>
            </tr>";
        }

        echo "</table>"
        ?>
    </div>
        
    


    </body>

</html>    








