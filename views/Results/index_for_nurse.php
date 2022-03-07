<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 


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
            text-align: center;
            background-color: #0974ba;
            color: white;
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
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            float: right;
        }
            
    </style>

<div class="topnav">
        <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
        <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
        <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>
        <form method="get" action="">
            <div class="btn-group2">
                    <input type="text" name="key">
                    <input type="hidden" name="controller" value="results"/>
                    <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                    <button class="button" type="submit" name="action" value="searchNurse"> 
                    <i class='fas fa-search' style='font-size: 24px'></i></button>
            </div>
        </form>
        
        <?php echo $userid?>
</div><br>

 <div class="center">
     <center>
         <div class="try1">
            

            <h3>new Results <a href="?controller=results&action=newResultsNurse&userid=<?php echo $userid;?>"> click!!! </a> </h3>
            
            

            <table border=1 id="customers">
   
           
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
                <td align=center><a href=?controller=results&action=upload&id=$r->id&userid=$userid>
                <i class='fas fa-cloud-upload-alt' style='font-size: 24px;'></i> </a> </td>
                <td align=center><a href=?controller=results&action=updateFormNurse&id=$r->uid&userid=$userid>
                <i class='fas fa-edit' style='font-size: 24px;'></i></a></td>
                <td align=center><a href=?controller=results&action=deleteConfirmNurse&id=$r->uid&userid=$userid>
                <i class='fas fa-trash-alt' style='font-size: 24px;'></i> </a></td></tr>";
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
    