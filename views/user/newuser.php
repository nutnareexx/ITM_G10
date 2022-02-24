<form method="get" action="">
    <label> เลขบัตรประชาชน <input type="text" name="uid"/> </label>
    <br>
    <label> คำนำหน้าชื่อ <select name="preid"> 
        <?php foreach($prenameList as $pre){
            echo "<option value=$pre->id> $pre->name </option>";
        }
        ?>
        </select>
    </label>
    <br>
    <label> ชื่อ <input type="text" name="uname"/> </label>
    <br>
    <label> นามสกุล <input type="text" name="usurname"/> </label>
    <br>
    <label> วันเดือนปีเกิด <input type="date" name="udob"/> </label>
    <br>
    <label> เบอร์โทรศัพท์ <input type="text" name="uphone"/> </label>
    <br>
    <label> E-mail <input type="text" name="uid"/> </label>
    <br>

    <input type="hidden" name="controller" value="user"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="adduser"> NEXT </button>
</form>