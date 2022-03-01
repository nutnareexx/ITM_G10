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

        .center {
            text-align: center;
            border: none;
            }
    </style>

    <div class="card center">
        <form method="get" action="">
            <div class="btn-group">
            <label>รหัสผลตรวจ<input type="text" name="id"/></label><br>
            </div>
            
            <label>ผู้ป่วย<select name="uid">
                <option value=""> choose </option>
                <?php foreach($resultsList as $r) {echo "<option value = $r->uid>$r->name $r->sname</option>";}?>
                </select>
            </label><br>
            <label>ผลการตรวจ<input type="text" name="rs"/></label><br>
            <label>โรงพยาบาล<select name="hid">
                <option value=""> choose </option>
                <?php foreach($h_List as $h) {echo "<option value = $h->Hid>$h->H_name</option>";}?>
                </select>
            </label><br>
            
            <div class="btn-group">
                <input type="hidden" name="controller" value="results"/>
                <button class="button" type="submit" name="action" value="indexNurse">Back</button>
                <button class="button" type="submit" name="action" value="addResultsNurse">Save</button>
            </div>
        </form>
    </div>
</html>
