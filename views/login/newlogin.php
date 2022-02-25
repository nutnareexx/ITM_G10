<form method="get" action="">
    <?php echo $id." password " ;?>
    <label> PASSWORD <input type="text" name="password"/> </label>
    <br>
    <label> CONFIRM PASSWORD <input type="text" name="confirm"/> </label>
    <br>
    

    <input type="hidden" name="controller" value="user"/>
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <button type="submit" name="action" value="signin"> BACK </button>
    <button type="submit" name="action" value="addpassword"> CONFIRM </button>
</form>