<form method="get" action="">
    <?php echo $id." password " ;?>
    <label> PASSWORD <input type="text" name="uname"/> </label>
    <br>
    <label> CONFIRM PASSWORD <input type="text" name="usurname"/> </label>
    <br>
    

    <input type="hidden" name="controller" value="user"/>
    <button type="submit" name="action" value="signin"> BACK </button>
    <button type="submit" name="action" value="addpassword"> CONFIRM </button>
</form>