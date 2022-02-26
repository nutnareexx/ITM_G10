<html>

<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    
</head>

<style>
    

    .try2{
        text-align:center;
        font-family: 'Prompt', sans-serif;
    }


</style>

<body>
    <div class="try2">
        <h2> LOG IN </h2>
    </div>

    <form method="get" action="">
        <br><br>
        <div class="try2">
            <label> USERNAME <input type="text" name="username"/> </label>
            <br>
            <label> PASSWORD <input type="password" name="password"/> </label>
            <br>
            
        </div>
        <input type="hidden" name="controller" value="user"/>
        <button type="submit" name="action" value="login"> LOG IN </button>
        <button type="submit" name="action" value="signin"> SIGN IN </button>

        <br><br>
        <div class="try2">
            username : 12345 password : 12345 General
            <br>
            username : 888 password : 999 Admin
            
        </div>
        
        <br><br>
        
    </form>
</body>
</html>