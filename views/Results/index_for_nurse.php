<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
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
            
    </style>

 <div class="center">
            <table border=1 id="customers"><br>

            <br>new Results <a href="?controller=results&action=newResultsNurse"> CLICK!!! </a> <br>
            <br><form method="get" action="">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="results"/>
                <button type="submit" name="action" value="searchNurse"> 
            Search </button>
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
                <td>$r->nt</td>
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
    