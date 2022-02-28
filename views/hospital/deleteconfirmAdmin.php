<?php echo "<br><br>Are you sure to delete this Hospital? <br>
            <br>  รหัสโรงพยาบาล:$hospitalmodels->Hid
            <br>ชื่อโรงพยาบาล:$hospitalmodels->H_name  
            <br>เวลาเปิดทำการ:$hospitalmodels->H_time_open 
            <br>เวลาปิดทำการ:$hospitalmodels->H_time_close  
            <br>ราคาตรวจ RT-PCR:$hospitalmodels->H_price<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="Hidnew" value="<?php echo $hospitalmodels->Hid;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
