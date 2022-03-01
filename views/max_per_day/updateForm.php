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
            width: 15%;
            padding: 10px 10px;
            margin: 8px 0;
            font-size: 16px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=time], select {
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

        input[type=date], select {
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

    <form method="get"action="">
        <div class="btn-group">
        <br>
        <?php echo "$m->H_name ";?> <br>
        <label> วันที่ <input type="date" name="max_date"
            value="<?php echo $m->max_date;?>"/></label><br>
        <label> เวลาเปิดทำการ <input type="time" name="max_topen"
            value="<?php echo $m->max_topen;?>"/></label><br>
        <label> เวลาปิดทำการ <input type="time" name="max_tclose"
            value="<?php echo $m->max_tclose;?>"/></label><br>
        <label> จำนวนที่รับได้ <input type="text" name="max"
            value="<?php echo $m->max_num;?>"/></label><br>
        

    
        <input type="hidden" name="controller" value="maxperday"/>
        <input type="hidden" name="max_id" value="<?php echo $m->max_id;?>"/>
        <input type="hidden" name="Hid" value="<?php echo $m->Hid;?>"/>
        <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
        <button class="button" type="submit" name="action" value="indexNurse">Back</button>
        <button class="button" type="submit" name="action" value="update"> update </button>

    </div>
    
</div>
        
    </form> 
</html>



