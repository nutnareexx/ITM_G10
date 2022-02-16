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
    <br>
    [<a href="?controller=maxperday&action=index"> MAX_PER_DAY </a>]
    [<a href="?controller=results&action=index"> RESULTS </a>]
    [<a href="?controller=results&action=index"> Results naaaaa </a>]
    [<a href="?controller=hospital&action=index"> HOSPITAL </a>]
    <?php require_once("routes.php");?>
</body>
</html>