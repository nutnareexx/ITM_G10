<table border=1>

<br>new Results <a href="?controller=results&action=newResults"> CLICK!!! </a> <br>
<br>
    <tr> <td>เลขบัตรประชาชน</td>
    <td>คำนำหน้า</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>เบอร์โทรศัพท์</td>
    <td>อีเมลล์</td>
    <td>โรงพยาบาล</td>
    <td>upload file</td>
    <td>update</td>
    <td>delete</td></tr>
<?php foreach($resultsList as $r)
{
    echo "<tr> <td>$r->uid</td>
    <td>$r->nt</td>
    <td>$r->name</td>
    <td>$r->sname</td>
    <td>$r->phone</td>
    <td>$r->mail</td>
    <td>$r->hname</td>
    <td>Upload File</td>
    <td>update</td><td>delete</td></tr>";
}
echo "</table> "
?>