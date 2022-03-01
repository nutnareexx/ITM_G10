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
            padding: 10px 32px;
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
        <?php echo "<br><br>Are you sure to delete this Hospital? <br>
                    <br>  รหัสโรงพยาบาล:$hospitalmodels->Hid
                    <br>ชื่อโรงพยาบาล:$hospitalmodels->H_name  
                    <br>เวลาเปิดทำการ:$hospitalmodels->H_time_open 
                    <br>เวลาปิดทำการ:$hospitalmodels->H_time_close  
                    <br>ราคาตรวจ RT-PCR:$hospitalmodels->H_price<br>";?>
        <form method="get" action=""><br>
            <input type="hidden" name="controller" value="hospital"/>
            <input type="hidden" name="Hidnew" value="<?php echo $hospitalmodels->Hid;?>"/>
            <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
            <button class="button" type="submit" name="action" value="indexAdmin">Back</button>
            <button class="button" type="submit" name="action" value="delete">Delete</button>
        </form>

</div>
    

</html>

