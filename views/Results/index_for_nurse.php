<table border=1>

<br>new Results <a href="?controller=results&action=newResults"> CLICK!!! </a> <br>
<br>
    <tr> <td>เลขบัตรประชาชน</td>
    <td>ผลการตรวจ</td>
    <td>คำนำหน้า</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>เบอร์โทรศัพท์</td>
    <td>อีเมลล์</td>
    <td>upload file</td>
    <td>update</td>
    <td>delete</td></tr>
<?php foreach($resultsList as $r)
{
    echo "<tr> <td>$r->id</td><td>$r->rs</td><td>$r->uid</td><td>$r->hid</td>
    <td>update</td><td>delete</td></tr>";
}
echo "</table> "
?>