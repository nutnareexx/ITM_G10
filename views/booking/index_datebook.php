<br>

    <?php 
      
        echo $name->H_name ;
    ?>



<table border = 1 >
    <tr> 
    <td>วันที่</td>
    <td>เวลาเปิดทำการ</td>
    <td>เวลาปิดทำการ</td>
    <td>จำนวนที่รับได้ต่อวัน</td>
    <td>จอง</td>
</tr>
    

    <?php foreach($date as $booking)
{
    echo "<tr> 
    <td>$booking->max_date</td>
    <td>$booking->max_topen</td>
    <td>$booking->max_tclose</td>
    <td>$booking->max_num</td>
    <td> <a href=?controller=booking&action=checkbook&max_id=$booking->max_id>จอง</a></td>
    </tr>";
}


echo "</table> "
?>