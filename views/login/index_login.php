<html>

<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    
</head>

<style>
    

    .try2{
        text-align:center;
        font-family: 'Prompt', sans-serif;
    }

    .header {
        font-family: 'Prompt', sans-serif;
        background-color: #f1f1f1;
        padding: 20px;
        text-align: center;
    }

    .btn-group .button {
        /*border-radius: 5%;*/
        position: relative;
        background-color: #333 ; /* Green */
        border: 1px black;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        /*float: center;*/
    }

    .btn-group .button:not(:last-child) {
        border-right: none; /* Prevent double borders */
    }

    .btn-group .button:hover {
        background-color: #ddd;
        color: black;
    }

    .card {
        text-align:center;
        font-family: 'Prompt', sans-serif;
        /*font-size: 16px;*/
        background-color: white;
        padding: 10px;
        margin-top: 10px;
    }

    input[type=text], select {
        font-family: 'Prompt', sans-serif;
        width: 15%;
        padding: 12px 10px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=password], select {
        font-family: 'Prompt', sans-serif;
        width: 15%;
        padding: 12px 10px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }


</style>

<body>
    <div class="header">
        <h2> ลงชื่อเข้าใช้งาน <br> ( LOG IN ) </h2>
    </div>

    <form method="get" action="">
        <br><br>
        <div class="card">
            <label> USERNAME <input type="text" name="username"/> </label>
            <br><br>
            <label> PASSWORD <input type="password" name="password"/> </label>
            <br> 
        </div>


            <div class="card">
                <div class="btn-group">
                    <input type="hidden" name="controller" value="user"/>
                    <button class="button" type="submit" name="action" value="login"> LOG IN </button>
                    <br><br>
                    <button type="submit" name="action" value="signin"> SIGN UP </button>
                    
                </div>
            </div>


        <br><br>
        <div class="card">
            username : 12345 password : 12345 General
            <br>
            username : 888 password : admin Admin
            
        </div>
        
        <br><br>
        
    </form>
</body>
</html>