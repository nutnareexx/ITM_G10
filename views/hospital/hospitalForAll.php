<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

    <style>
        html { 
        background: url("pic/bg3.png") ; 
        background-size: cover;

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
        
        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 80%;
            }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

        #customers tr:nth-child(even){
            background-color: #f2f2f2;
        }

        #customers tr:nth-child(odd){
            background-color: white;
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
            border-radius: 50px;
        }

        .btn-group .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group .button:hover {
            background-color: #ddd;
            color: black;
        }

        
        
        
    </style>

    <div class="topnav">
        <a href="?controller=user&action=indexlogin"> จองตรวจ RT-PCR </a>
        <a href="?controller=user&action=indexlogin"> ผลการตรวจ </a>
        <a href="?controller=user&action=indexlogin"> ประวัติการจอง </a>
        <a href="?controller=hospital&action=index"> โรงพยาบาล </a>
        

       
    </div>

    <body>
        <center>
                <br>
            <table border = 1 id="customers">
            <tr>
            <th><b>ชื่อโรงพยาบาล</th>
            <th><b>เวลาเปิด-ปิดทำการ</th>
            <th><b>ราคาตรวจ RT-PCR</th>
            <?php foreach( $hospitalmodelList as $hospitallist)
            {
                echo "<tr> <td>$hospitallist->H_name</td>
                <td>$hospitallist->H_time_open - $hospitallist->H_time_close</td>
                <td>$hospitallist->H_price</td> 
                </td></tr>";
            }
            echo "</table>";
            ?>

           
        </center>
        
    </body>
    

</html>