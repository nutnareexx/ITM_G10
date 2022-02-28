<form method="get" action="">
    <br>
    <label>รหัสโรงพยาบาล<input type="text" name="H_name"/> </label><br>
    <label>ชื่อโรงพยาบาล<input type="text" name="H_name"/> </label><br>
    <label>เวลาเปิดทำการ<input type="text" name="H_time_open"/> </label><br>
    <label>เวลาปิดทำการ<input type="text" name="H_time_close"/> </label><br>
    <label>ราคาตรวจ RT-PCR<input type="text" name="H_price"/> </label><br>
    
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhospital">Save</button>
</form>