
<br>new max per day <a href="?controller=maxperday&action=newMaxperday"> click!!! </a> <br>

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="maxperday"/>
    <button type="submit" name="action" value="search"> 
Search </button>
</form>

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
    echo "<tr> <td>$m->H_name</td>
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