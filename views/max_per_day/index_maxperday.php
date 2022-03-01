<br>


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
        
        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 80%;
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
            background-color: #333;
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

    </style>

    <div class="header">
        <h1> จำนวนที่รับได้ต่อวัน </h1>
    </div>

    <body>
            <div class="try1">
            <h3>new max per day <a href="?controller=maxperday&action=newMaxperday"> click!!! </a> </h3>


            <form method="get" action="">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="maxperday"/>
                <button type="submit" name="action" value="search"> 
            Search </button>
            </form>
            
        <center>
            <table border = 1 >
                <tr> <td>โรงพยาบาล</td> 
                <td>วันที่</td>
                <td>เวลาเปิดทำการ</td>
                <td>เวลาปิดทำการ</td>
                <td>จำนวนที่รับได้ต่อวัน</td>
                <td>update</td>
                <td>delete</td></tr>
                <?php foreach($maxperday_list as $m)
            {
                echo "<tr> <td>$m->H_name</td>
                <td>$m->max_date</td>
                <td>$m->max_topen</td>
                <td>$m->max_tclose</td>
                <td>$m->max_num</td>
                <td> <a href=?controller=maxperday&action=updateForm&max_id=$m->max_id>update</a></td>
                <td> <a href=?controller=maxperday&action=deleteConfirm&max_id=$m->max_id>delete</td>
                </tr>";
            }


            echo "</table> "
            ?>
        </center>
            

        </div>
    </body>
    
</html>