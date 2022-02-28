<html>

  <?php 
    //require("connection_connect.php");
    //$result = $conn->query($sql); 
  ?>



  <form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

      <label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/><br>
      </label>
      <br>
      <!--<input type="hidden" name="controller" value="results"/>-->
      <input type="hidden" name="id" value="<?php echo $re->id;?>"/>
      <input type="hidden" name="uid" value="<?php echo $re->uid;?>"/>
      <button type="submit" name="button" id="button" value="upResult"> SUBMIT </button>
      
  </form>
  <form method="get" action="">
    <input type="hidden" name="controller" value="results"/>
    <button type="submit" name="action" value="index">Back</button>
  </form>
</html>