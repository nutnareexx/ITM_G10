<table border=1><br>

<br>new Results <a href="?controller=results&action=newResults"> CLICK!!! </a> <br>
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
    <td>Upload File</td>
    <td><a href=?controller=results&action=updateForm&id=$r->uid> update </a></td>
    <td><a href=?controller=results&action=deleteConfirm&id=$r->uid> delete </a></td></tr>";
}
echo "</table> "
?>