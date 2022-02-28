<?php echo "<br><br>Are you Sure to delete this id?<br>
<br>ลำดับที่ : $resultss->id
<br>ชื่อ : $resultss->nt$resultss->name   $resultss->sname
<br>เบอร์โทรศัพท์ : $resultss->phone
<br>โรงพยาบาล : $resultss->hname
<br>ผลการตรวจ : $resultss->rs";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="results"/>
    <input type="hidden" name="id" value="<?php echo $resultss->id;?>"/>
    <button type="submit" name="action" value="indexNurse"> Back </button>
    <button type="submit" name="action" value="deleteNurse"> Delete </button>
</form>