<html>

<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    
</head>

<style>

    p.try2{
        font-family: 'Prompt', sans-serif;
    }
</style>

<body>
    <h1> <p class="try2" > LOG IN </p> </h1>

    <form method="get" action="">
        <br><br>
        <label>  USERNAME <input type="text" name="username"/> </label>
        <br><br>
        <label> PASSWORD <input type="text" name="password"/> </label>
        <br><br>
        <input type="hidden" name="controller" value="user"/>
        <button type="submit" name="action" value="login"> LOG IN </button>
        <br><br>
        <button type="submit" name="action" value="signin"> SIGN IN </button>
    </form>
</body>
</html>