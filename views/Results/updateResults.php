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

        .center {
            text-align: center;
            border: none;
            }
    </style>

    <div class="card center">
            <form method="get" action="">
            <label> ลำดับที่ <input type="text" name="id" 
                value="<?php echo $resultss->id;?>"/></label><br>
            <label>เลขบัตรประชาชน<select name="uid">
            <?php foreach($resultsList as $r)
            {
                echo "<option value= $r->uid";
                if($r->uid==$resultss->uid) 
                {
                    echo " selected='selected'";
                }
                echo "> $r->uid</option>";
            }?>
            </select></label><br>
            <?php echo "ชื่อ $resultss->pname$resultss->name   $resultss->sname<br>
            เบอร์โทรศัพท์ $resultss->phone<br>
            อีเมลล์ $resultss->mail";?><br>

            <label>โรงพยาบาล<select name="hid">
            <?php foreach($h_List as $h)
            {
                echo "<option value= $h->Hid";
                if($h->Hid==$resultss->hid) 
                {
                    echo " selected='selected'";
                }
                echo "> $h->H_name</option>";
            }?>
            </select></label><br>
            <label> ผลการตรวจ <input type="text" name="rs" 
                value="<?php echo $resultss->rs;?>"/></label><br>

        <div class="btn-group">
            <br><input type="hidden" name="controller" value="results"/>
            <input type="hidden" name="id" value="<?php echo $resultss->id;?>"/>
            <button class="button" type="submit" name="action" value="indexNurse">Back</button>
            <button class="button" type="submit" name="action" value="update"> update </button>
            </form>
        </div>
        
    </div>
        
</html>
