<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>

        .card {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            margin-top: 20px;
        }
        .btn-group .button {
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

        input[type=password], select {
            font-family: 'Prompt', sans-serif;
            width: 15%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>

    <div class="card">
        <form method="get" action="">
            
            <label> PASSWORD <input type="password" name="password"/> </label>
            <br>
            <label> CONFIRM PASSWORD <input type="password" name="confirm"/> </label>
            <br>
            
            <div class="btn-group">
                <input type="hidden" name="controller" value="user"/>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <button class="button" type="submit" name="action" value="signin"> BACK </button>
                <button class="button" type="submit" name="action" value="addpassword"> CONFIRM </button>
            </div>
        </form>
    </div>

</html>