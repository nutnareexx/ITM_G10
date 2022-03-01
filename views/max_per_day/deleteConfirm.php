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
            background-color: #0974ba; /* Green */
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

        .center {
            text-align: center;
            border: none;
            }
    </style>

    <div class="card center">
        <div class="btn-group">
            <?php echo "<br><br>Are you Sure to delete this id?<br>
            <br>โรงพยาบาล : $m->H_name
            <br>วันที่ : $m->max_date
            <br>เวลาเปิดทำการ : $m->max_topen
            <br>เวลาปิดทำการ : $m->max_tclose
            <br>จำนวนที่รับได้ต่อวัน : $m->max_num";?>
            <form method="get" action="">
                <input type="hidden" name="controller" value="maxperday"/>
                <input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <button class="button" type="submit" name="action" value="indexNurse"> Back </button>
                <button class="button" type="submit" name="action" value="delete"> Delete </button>
            </form>
        </div>
        
    </div>
    
</html>

