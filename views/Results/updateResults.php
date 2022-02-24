<form method="get" action="">
    <label> ลำดับที่ <input type="text" name="id" 
        value="<?php echo $resultss->id;?>"/></label><br>
    <label>เลขบัตรประชาชน<select name="uid">
    <?php foreach($resultsList as $r)
     {
         echo "<option value= $r->uid";
         if($r->uid==$resultss->uid) 
         {
             echo " selected='selected'";
         }
         echo "> $r->uid</option>";
     }?>
    </select></label><br>
    <?php echo "ชื่อ $resultss->nt$resultss->name   $resultss->sname<br>
    เบอร์โทรศัพท์ $resultss->phone<br>
    อีเมลล์ $resultss->mail";?><br>

    <label>โรงพยาบาล<select name="hid">
    <?php foreach($h_List as $h)
     {
         echo "<option value= $h->Hid";
         if($h->Hid==$resultss->hid) 
         {
             echo " selected='selected'";
         }
         echo "> $h->H_name</option>";
     }?>
    </select></label><br>
    <label> ผลการตรวจ <input type="text" name="rs" 
        value="<?php echo $resultss->rs;?>"/></label><br>

<br><input type="hidden" name="controller" value="results"/>
<input type="hidden" name="id" value="<?php echo $resultss->id;?>"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update"> update </button>
</form>