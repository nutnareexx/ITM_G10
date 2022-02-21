<table border = 1 >
    <tr> <td>โรงพยาบาล</td> 
    <td>วันที่</td>
    <td>เวลาเปิดทำการ</td>
    <td>เวลาปิดทำการ</td>
    <td>จำนวนที่รับได้ต่อวัน</td>
    <td>update</td>
    <td>delete</td></tr>
    <?php foreach($maxperday_list as $m)
{
    echo "<tr> <td>$m->Hid</td>
    <td>$m->max_date</td>
    <td>$m->max_topen</td>
    <td>$m->max_tclose</td>
    <td>$m->max_num</td>
    <td>update</td>
    <td>delete</td>
    </tr>";
}
echo "</table> "
?>