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

        .center {
            text-align: center;
            border: none;
            }
    </style>

<div class="card center">
    <form method="get" action="">
    <div class="btn-group">
        <br><br><label>รหัสโรงพยาบาล <input type="text" name="Hid"
            value="<?php echo  $hospitalmodels->Hid;?>"/> </label><br>

        <label>ชื่อโรงพยาบาล <input type="text" name="H_name"
            value="<?php echo  $hospitalmodels->H_name;?>"/> </label><br>

        <label>เวลาเปิดทำการ <input type="text" name="H_time_open"
            value="<?php echo  $hospitalmodels->H_time_open;?>"/> </label><br>

        <label>เวลาปิดทำการ <input type="text" name="H_time_close"
            value="<?php echo  $hospitalmodels->H_time_close;?>"/> </label><br>
            
        <label>ราคาตรวจ RT-PCR <input type="text" name="H_price"
            value="<?php echo  $hospitalmodels->H_price;?>"/> </label><br>

        <div class="btn-group">
            <input type="hidden" name="controller" value="hospital"/>
            <input type="hidden" name="Hidnew" value="<?php echo $hospitalmodels->Hid;?>"/>
            <button class="button" type="submit" name="action" value="index"> Back </button>
            <button class="button" type="submit" name="action" value="update"> Update </button>
        </div>
        
    </form>
</div>
    
</html>
