<form method="get" action = "">
    <label> โรงพยาบาล <select name="H_name">
        <option value=""> choose </option>
        <?php foreach($hospitalmodelList as $hos) {echo "<option value = $hos->Hid>$hos->H_name</option>";}?>
        </select>
    </label><br>
    <label> วันที่ <input type = "date" name = "max_date" /> </label><br>
    <label> เวลาเปิดทำการ <input type = "time" name = "max_topen" /> </label><br>
    <label> เวลาปิดทำการ <input type = "time" name = "max_tclose" /> </label><br>
    <label> จำนวนที่รับได้ <input type = "text" name = "max_num" /> </label><br>

    <input type="hidden" name="controller" value="maxperday"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addMaxperday">Save</button>


</form>
