<table border = 1>
<tr> <td><b>รหัสโรงพยาบาล</td>
<td><b>ชื่อโรงพยาบาล</td>
<td><b>เวลาเปิดทำการ</td>
<td><b>เวลาปิดทำการ</td>
<td><b>ราคาตรวจ RT-PCR</td>
<?php foreach( $hospitalmodellist as  $hospitallist)
{
    echo "<tr> <td>$hospitallist->Hid</td>
    <td>$hospitallist->H_name</td>
    <td>$hospitallist->H_time_open</td>
    <td>$hospitallist->H_time_close</td> 
    <td>$hospitallist->H_price</td> 
    </td></tr>";
}
echo "</table>";
 ?>