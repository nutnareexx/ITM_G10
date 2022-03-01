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
            padding: 10px 25px;
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
            padding: 5px 5px;
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
            padding: 5px 5px;
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
            <br>
            <label>รหัสโรงพยาบาล<input type="text" name="Hid"/> </label><br>
            <label>ชื่อโรงพยาบาล<input type="text" name="H_name"/> </label><br>
            <label>เวลาเปิดทำการ<input type="time" name="H_time_open"/> </label><br>
            <label>เวลาปิดทำการ<input type="time" name="H_time_close"/> </label><br>
            <label>ราคาตรวจ RT-PCR<input type="text" name="H_price"/> </label><br>
            
            <div class="btn-group">
                <input type="hidden" name="controller" value="hospital"/>
                <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                <button class="button" type="submit" name="action" value="indexAdmin">Back</button>
                <button class="button" type="submit" name="action" value="addhospital">Save</button>

            </div>
            
        </div>
    </form>
</div>
    
</html>
