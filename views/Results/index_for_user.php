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

<table border=1 id="customers">

<br>
<<<<<<< Updated upstream
    <tr> 
    <td>ลำดับที่</td>
    <td>เลขบัตรประชาชน</td>
    <td>คำนำหน้า</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>เบอร์โทรศัพท์</td>
    <td>อีเมลล์</td>
    <td>โรงพยาบาล</td>
    <td>ผลการตรวจ</td>
    <td>Download File</td>
=======
    <tr> <th>ลำดับที่</th>
    <th>เลขบัตรประชาชน</th>
    <th>คำนำหน้า</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทรศัพท์</th>
    <th>อีเมลล์</th>
    <th>โรงพยาบาล</th>
    <th>ผลการตรวจ</th>
    <th>Download File</th>
>>>>>>> Stashed changes
    </tr>
<?php
{
    echo "<tr> 
    <td>$resultsList->id</td>
    <td>$resultsList->uid</td>
    <td>$resultsList->pname</td>
    <td>$resultsList->name</td>
    <td>$resultsList->sname</td>
    <td>$resultsList->phone</td>
    <td>$resultsList->mail</td>
    <td>$resultsList->hname</td>
    <td>$resultsList->rs</td>
    <td> <a href='up/$fileList->fname'> $fileList->fname </a>  </td>
    </tr>";
}
echo "</table> "
?>

</html>
    