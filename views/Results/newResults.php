<form method="get" action="">
    <label>รหัสผลตรวจ<input type="text" name="id"/></label><br>
    <label>ผลการตรวจ<input type="text" name="rs"/></label><br>
    <label>ผู้ป่วย<select name="uid">
        <option value=""> choose </option>
        <?php foreach($resultsList as $r) {echo "<option value = $r->uid>$r->name $r->sname</option>";}?>
        </select>
    </label><br>
    <label>โรงพยาบาล<select name="hid">
        <option value=""> choose </option>
        <?php foreach($resultsList as $r) {echo "<option value = $r->hid>$r->hname</option>";}?>
        </select>
    </label><br>
    <input type="hidden" name="controller" value="results"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addResults">Save</button>
</form>