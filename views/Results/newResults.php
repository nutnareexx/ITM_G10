<form method="get" action="">
    <label>รหัสผลตรวจ<input type="text" name="id"/></label><br>
    <label>ผลการตรวจ<input type="text" name="rs"/></label><br>
    <label>รหัสผู้ป่วย<select name="uid">
        <?php foreach($resultsList as $r) {echo "<option value = $r->uid>$r->uid</option>";}?>
        </select>
    </label><br>
    <label>รหัสโรงพยาบาล<select name="hid">
        <?php foreach($resultsList as $r) {echo "<option value = $r->hid>$r->hid</option>";}?>
        </select>
    </label><br>
    <input type="hidden" name="controller" value="results"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addResults">Save</button>
</form>