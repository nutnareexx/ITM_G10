<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
<head></head>
<body>
    <?php echo "controller = ".$controller.", action = ".$action ;?>
    <br>
    [<a href="?controller=pages&action=home"> HOME </a>]

    [<a href="?controller=maxperday&action=index"> MAX_PER_DAY </a>]
    [<a href="?controller=results&action=index"> Results naaaaa </a>]
    [<a href="?controller=hospital&action=index"> HOSPITAL </a>]
    <?php require_once("routes.php");?>
</body>

<body>
    <form method="get" action="">
        <br>
        <label> USERNAME <input type="text" name="username"/> </label>
        <br>
        <label> PASSWORD <input type="text" name="password"/> </label>
        <br>
        <input type="hidden" name="controller" value="login"/>
        <button type="submit" name="action" value="login"> LOG IN </button>
        <input type="hidden" name="controller" value="user"/>
        <button type="submit" name="action" value="signin"> SIGN IN </button>
    </form>
</body>
</html>