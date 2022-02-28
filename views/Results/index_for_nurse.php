<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
        

            .center {
                text-align: center;
                border: none;
                }
    </style>

    <div class="center">
            <table border=1><br>

            <br>new Results <a href="?controller=results&action=newResultsNurse"> CLICK!!! </a> <br>
            <br><form method="get" action="">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="results"/>
                <button type="submit" name="action" value="searchNurse"> 
            Search </button>
            </form><br>
            <br>
                <tr> <td>ลำดับที่</td>
                <td>เลขบัตรประชาชน</td>
                <td>คำนำหน้า</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>เบอร์โทรศัพท์</td>
                <td>อีเมลล์</td>
                <td>โรงพยาบาล</td>
                <td>ผลการตรวจ</td>
                <td>upload file</td>
                <td>update</td>
                <td>delete</td></tr>

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
    