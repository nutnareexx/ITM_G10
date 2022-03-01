

<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        
    </head>
`
    <style>
        .try1{
            font-family: 'Prompt', sans-serif;
            text-align: center;
            
        }

        .try2{
            font-family: 'Prompt', sans-serif;
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

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 25%;
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
        <br>
        <div class="try2"><h1>  การจองการตรวจ RT-PCR </h1></div>
        



        <div class="try1">
            <form method="get" action="">
                <input type="text" name="key">
                <div class="btn-group">
                    <input type="hidden" name="controller" value="booking"/>
                    
                    <button class="button" type="submit" name="action" value="search"> Search </button>
                    
                </div>
            </form>   
        </div>

        


        
        <div class="try1">
        <?php foreach($hospitalmodelList as $hospital)
        {
        echo "<tr> 
        
        <td> 
        <a href=?controller=booking&action=bookdate&Hid=$hospital->Hid>$hospital->H_name</a></td>
        
        </tr>";
        
        echo "<br>";
        
        
        }
    echo "</table> "
    ?>
    </div>
        

    </body>

</html>    








