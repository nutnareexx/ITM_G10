<table border=1>
    <tr> <td>ID</td><td>ชื่อ</td><td>นามสกุล</td><td>ผลการตรวจ</td>
    <td>update</td><td>delete</td></tr>
<?php foreach($results_list as $r)
{
    echo "<tr> <td>$r->id</td><td>$r->name</td><td>update</td><td>delete</td></tr>";
}
echo "</table> "