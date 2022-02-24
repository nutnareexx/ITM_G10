<?php echo "<br><br>Are you Sure to delete this id?<br>
<br>โรงพยาบาล : $m->H_name
<br>วันที่ : $m->max_date
<br>เวลาเปิดทำการ : $m->max_topen
<br>เวลาปิดทำการ : $m->max_tclose
<br>จำนวนที่รับได้ต่อวัน : $m->max_num";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="maxperday"/>
    <input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>