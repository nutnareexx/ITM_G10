<table border=1>

<br>
    <tr> <td>เลขบัตรประชาชน</td>
    <td>คำนำหน้า</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>เบอร์โทรศัพท์</td>
    <td>อีเมลล์</td>
    <td>โรงพยาบาล</td>
    <td>ผลการตรวจ</td>
    <td>Download file</td>
    </tr>
<?php foreach($resultsList as $r)
{
    echo "<tr> <td>$r->uid</td>
    <td>$r->nt</td>
    <td>$r->name</td>
    <td>$r->sname</td>
    <td>$r->phone</td>
    <td>$r->mail</td>
    <td>$r->hname</td>
    <td>$r->rs</td>
    <td>DL</td>
    </tr>";
}
echo "</table> "
?>