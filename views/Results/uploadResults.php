
<?php 
include('connect.php');
$query = "SELECT * FROM uploadfile ORDER BY fileID asc" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query); 

//5. close connection
mysqli_close($con);
?>
<br/>
<form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <!--<p>&nbsp;</p>-->
 
    
    <tr>
    <label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/><br>
      </label></td>
    </tr>
    <tr>
    <br>
    <td><input type="submit" name="button" id="button" value="Upload" /></td>
    </tr>

  </table>
  <!--<p>&nbsp;</p>-->
</form>

    