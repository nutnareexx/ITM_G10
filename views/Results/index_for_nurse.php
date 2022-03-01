<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
        .header {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 40px;
            text-align: center;
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
            width: 100%;
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
            text-align: left;
            background-color: #333;
            color: white;
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
            
    </style>

<div class="header">
        <h1> ผลการตรวจ RT-PCR </h1>
</div>

<div class="topnav">
        <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
        <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>

        <?php echo $userid?>
</div><br>

 <div class="center">
     <center>
         <div class="try1">
            <table border=1 id="customers">

            <br>new Results <a href="?controller=results&action=newResultsNurse"> CLICK!!! </a> <br>
            <br><form method="get" action="">
            <div class="btn-group">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="results"/>
                <button class="button" type="submit" name="action" value="searchNurse"> 
            Search </button>
            </div>
            </form><br>


   
            <br>
                <tr> <th>ลำดับที่</th>
                <th>เลขบัตรประชาชน</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>อีเมลล์</th>
                <th>โรงพยาบาล</th>
                <th>ผลการตรวจ</th>
                <th>upload file</th>
                <th>update</th>
                <th>delete</th></tr>

            <?php foreach($resultsList as $r)
            {
                echo "<tr> <td>$r->id</td>
                <td>$r->uid</td>
                <td>$r->pname</td>
                <td>$r->name</td>
                <td>$r->sname</td>
                <td>$r->phone</td>
                <td>$r->mail</td>
                <td>$r->hname</td>
                <td>$r->rs</td>
                <td><a href=?controller=results&action=upload&id=$r->id> clik to upload </a> </td>
                <td><a href=?controller=results&action=updateFormNurse&id=$r->uid> update </a></td>
                <td><a href=?controller=results&action=deleteConfirmNurse&id=$r->uid> delete </a></td></tr>";
            }
            echo "</table> "
            ?>
         </div>
         
     </center>
            
            <!--<form action="/action_page.php">
                
                    <input type="file" id="myfile" name="myfile"><br><br>
                    <input type="submit" value="Submit">
                    </form>
            <a href=?controller=results&action=upload> upload </a>

            <form action="upload_file.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="FileID"/>
                <input type="submit" type="submit" id="submit" value="Submit"/>
            </form>-->
        </div>

    

</html>
    