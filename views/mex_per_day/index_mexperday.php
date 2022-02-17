<table border = 1 >
    <tr> <td>โรงพยาบาล</td> 
    <td>วันที่</td>
    <td>เวลาเปิดทำการ</td>
    <td>เวลาปิดทำการ</td>
    <td>จำนวนที่รับได้ต่อวัน</td>
    <td>update</td>
    <td>delete</td></tr>
    <?php foreach($resultsList as $r)
{
    echo "<tr> <td>$r->Hid</td><td>$r->max_date</td><td>$r->max_topen</td><td>$r->max_tclose</td>
    <td>$r->max_num</td><td>update</td><td>delete</td></tr>";
}
echo "</table> "
?>