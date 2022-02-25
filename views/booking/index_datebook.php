<br>
<form method="get"action="">
<?php echo "$booking_list->H_name ";?> <br>
</form> 

<table border = 1 >
    <tr> 
    <td>วันที่</td>
    <td>เวลาเปิดทำการ</td>
    <td>เวลาปิดทำการ</td>
    <td>จำนวนที่รับได้ต่อวัน</td>
</tr>
    

    <?php foreach($booking_list as $booking)
{
    echo "<tr> 
    <td>$booking->max_date</td>
    <td>$booking->max_topen</td>
    <td>$booking->max_tclose</td>
    <td>$booking->max_num</td>
    
    </tr>";
}


echo "</table> "
?>