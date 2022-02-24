<html>
<body>
    <form method="get" action="">
        <br><br>
        <label> USERNAME <input type="text" name="username"/> </label>
        <br><br>
        <label> PASSWORD <input type="text" name="password"/> </label>
        <br><br>
        <input type="hidden" name="controller" value="login"/>
        <button type="submit" name="action" value="login"> LOG IN </button>
        <br><br>
        <input type="hidden" name="controller" value="user"/>
        <button type="submit" name="action" value="signin"> SIGN IN </button>
    </form>
</body>
</html>