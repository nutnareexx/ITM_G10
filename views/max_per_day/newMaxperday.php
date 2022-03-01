<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
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
            }

        .btn-group .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group .button:hover {
            background-color: #ddd;
            color: black;
        }

        .card2 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                margin-top: 20px;
               
            }

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=date], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=time], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    </style>


<div class="card2">
    <form method="get" action = "">
        <!--<label> max_id <input type = "text" name = "max_id" /> </label><br>-->
        <label> โรงพยาบาล <select name="H_name">
            <option value=""> choose </option>
            <?php foreach($hospitalmodelList as $hos) {echo "<option value = $hos->Hid>$hos->H_name</option>";}?>
            </select>
        </label><br>
        <label> วันที่ <input type = "date" name = "max_date" /> </label><br>
        <label> เวลาเปิดทำการ <input type = "time" name = "max_topen" /> </label><br>
        <label> เวลาปิดทำการ <input type = "time" name = "max_tclose" /> </label><br>
        <label> จำนวนที่รับได้ <input type = "text" name = "max_num" /> </label><br>

        <div class="btn-group">
        <input type="hidden" name="controller" value="maxperday"/>
        <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
        <button class="button" type="submit" name="action" value="index">Back</button>
        <button class="button" type="submit" name="action" value="addMaxperday">Save</button>
        </div>

    </form>
</div>
</html>