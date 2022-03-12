<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
        /* Style the top navigation bar */
        .topnav {
                overflow: hidden;
                background-color: #0974ba;
            }

            /* Style the topnav links */
        .topnav a {
                font-family: 'Prompt', sans-serif;
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change color on hover */
        .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

        .card {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            margin-top: 20px;
            width: 50%;
            border-radius: 10px;
            text-align: center;
        }
        .btn-group .button {
            font-family: 'Prompt', sans-serif;
            position: relative;
            background-color: #0974ba ; /* Green */
            border: 1px black;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            /*float: center;*/
            border-radius: 50px;
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
            width: 100%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        .center {
            text-align: center;
            border: none;
            margin: auto;
            width: 60%;
            padding: 10px;

            }

    </style>

<div class="topnav">
        <a href="?controller=user&action=indexlogin"> จองตรวจ RT-PCR </a>
        <a href="?controller=user&action=indexlogin"> ผลการตรวจ </a>
        <a href="?controller=hospital&action=index"> โรงพยาบาล </a>
        

       
    </div>

<body>
    <div class="card center">
        <form method="get" action="">

            <table align="center">
                <tr>
                    <td align="right">PASSWORD : </td>
                    <td><label><input type="password" name="password"/> </label></td>
                </tr>
                <tr>
                    <td align="right">CONFIRM PASSWORD : </td>
                    <td><label><input type="password" name="confirm"/> </label></td>
                </tr>
            </table>
           
            <div class="btn-group">
                <input type="hidden" name="controller" value="user"/>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <button class="button" type="submit" name="action" value="addpassword"> ยืนยัน </button>
            </div>
        </form>
    </div>
</body>
    

</html>