<table border=1>
new Results <a href="?controller=results&action=newResults"> CLICK!!! </a> <br>
<br>
    <tr> <td>ID</td>
    <td>ผลการตรวจ</td>
    <td>Uid</td>
    <td>Hid</td>
    <td>update</td>
    <td>delete</td></tr>
<?php foreach($resultsList as $r)
{
    echo "<tr> <td>$r->id</td><td>$r->rs</td><td>$r->uid</td><td>$r->hid</td>
    <td>update</td><td>delete</td></tr>";
}
echo "</table> "
?>