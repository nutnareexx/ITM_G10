



<form method="get"action="">
    <br>
    <?php echo "$m->H_name ";?> <br>
    <label> วันที่ <input type="date" name="max_date"
        value="<?php echo $m->max_date;?>"/></label><br>
    <label> เวลาเปิดทำการ <input type="time" name="max_topen"
        value="<?php echo $m->max_topen;?>"/></label><br>
    <label> เวลาปิดทำการ <input type="time" name="max_tclose"
        value="<?php echo $m->max_tclose;?>"/></label><br>
    <label> จำนวนที่รับได้ <input type="text" name="max"
        value="<?php echo $m->max_num;?>"/></label><br>
       


<input type="hidden" name="controller" value="maxperday"/>
<input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
<input type="hidden" name="Hid" value="<?php echo $m->Hid;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update"> update </button>

</form> 