<table border=1>

<br>
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
