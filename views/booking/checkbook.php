<?php echo "<br><br>ต้องการจอง<br>
<br>โรงพยาบาล : $booking->H_name
<br>วันที่ : $booking->max_date
<br>เวลาเปิดทำการ : $booking->max_topen
<br>เวลาปิดทำการ : $booking->max_tclose
";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="booking"/>
    <input type="hidden" name="max_id" value="<?php echo $booking->max_id;?>"/>
    <button type="submit" name="action" value="bookdate"> ยกเลิก </button>
    <button type="submit" name="action" value="index"> ยืนยัน </button>
</form>