<html>

<?php 
include('connect.php');
$query = "SELECT * FROM uploadfile ORDER BY fileID asc" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query); 

//5. close connection
mysqli_close($con);
?>
<br/>



<form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

    <label>
      <input type="file" name="fileupload" id="fileupload"  required="required"/><br>
    </label>
    <br>
    <input type="hidden" name="controller" value="results"/>
    <input type="hidden" name="id" value="<?php echo $id;?>" required="required"/>
    <button type="submit" name="button" id="button" value="upResult"> SUBMIT </button>
    
</form>
<form method="get" action="">
  <input type="hidden" name="controller" value="results"/>
  <button type="submit" name="action" value="index">Back</button>
</form>
</html>