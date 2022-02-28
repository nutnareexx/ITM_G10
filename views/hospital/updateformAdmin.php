<form method="get" action="">

    <br><br><label>รหัสโรงพยาบาล <input type="text" name="Hid"
        value="<?php echo  $hospitalmodels->Hid;?>"/> </label><br>

    <label>ชื่อโรงพยาบาล <input type="text" name="H_name"
        value="<?php echo  $hospitalmodels->H_name;?>"/> </label><br>

    <label>เวลาเปิดทำการ <input type="text" name="H_time_open"
        value="<?php echo  $hospitalmodels->H_time_open;?>"/> </label><br>

    <label>เวลาปิดทำการ <input type="text" name="H_time_close"
        value="<?php echo  $hospitalmodels->H_time_close;?>"/> </label><br>
        
    <label>ราคาตรวจ RT-PCR <input type="text" name="H_price"
        value="<?php echo  $hospitalmodels->H_price;?>"/> </label><br>

       
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="Hidnew" value="<?php echo $hospitalmodels->Hid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>