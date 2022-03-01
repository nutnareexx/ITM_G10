<?php 
    echo "<br><br>ต้องการจอง<br>
    <br>โรงพยาบาล : $booking->H_name
    <br>วันที่ : $booking->max_date
    <br>เวลาเปิดทำการ : $booking->max_topen - $booking->max_tclose";
?>
<form method="get" action="">
    <input type="hidden" name="controller" value="booking"/>
    <input type="hidden" name="maxid" value="<?php echo $booking->max_id;?>"/>
    <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
    <button type="submit" name="action" value="bookdate"> ยกเลิก </button>
    <button type="submit" name="action" value="addBooking"> ยืนยัน </button>
</form>