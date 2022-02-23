<form method="get" action="">
    <label>เลขบัตรประชาชน<input type="text" name="uid"
        value="<?php echo $resultss->uid; ?>"/></label><br>
    <label>คำนำหน้า<select name="nt">
    <?php foreach($resultsList as $r)
     {
         echo "<option value= $r->nt";
         if($r->nt==$resultss->nt) 
         {
             echo " selected='selected'";
         }
         echo "> $r->nt</option>";
     }?>
    </select></label><br>
    <label>ชื่อ<select name="name">
    <?php foreach($resultsList as $r)
     {
         echo "<option value= $r->name";
         if($r->name==$resultss->name) 
         {
             echo " selected='selected'";
         }
         echo "> $r->name</option>";
     }?>
    </select></label><br>
    <label>นามสกุล<select name="sname">
    <?php foreach($resultsList as $r)
     {
         echo "<option value= $r->sname";
         if($r->sname==$resultss->sname) 
         {
             echo " selected='selected'";
         }
         echo "> $r->sname</option>";
     }?>
    </select></label><br>
    
    <label>เบอร์โทรศัพท์<input type="text" name="phone"
        value="<?php echo $resultss->phone; ?>"/></label><br>
    <label>อีเมลล์<input type="text" name="mail"
        value="<?php echo $resultss->mail; ?>"/></label><br>
    <label>โรงพยาบาล<select name="hid">
    <?php foreach($hospitalmodelList as $h)
     {
         echo "<option value= $h->Hid";
         if($h->Hid==$resultss->hid) 
         {
             echo " selected='selected'";
         }
         echo "> $h->H_name</option>";
     }?>
    </select></label><br>

<br><input type="hidden" name="controller" value="results"/>

<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="update"> update </button>
</form>