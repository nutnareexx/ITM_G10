<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="search"> Search </button>
</form>
<table border = 1>
<tr>
<td><b>ชื่อโรงพยาบาล</td>
<td><b>เวลาเปิดทำการ</td>
<td><b>เวลาปิดทำการ</td>
<td><b>ราคาตรวจ RT-PCR</td>
<?php foreach( $hospitalmodelList as $hospitallist)
{
    echo "<tr> <td>$hospitallist->H_name</td>
    <td>$hospitallist->H_time_open</td>
    <td>$hospitallist->H_time_close</td> 
    <td>$hospitallist->H_price</td> 
    </td></tr>";
}
echo "</table>";
 ?>