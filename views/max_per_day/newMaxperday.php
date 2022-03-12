<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <style>
        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color:#0974ba;
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

        .btn-group .button {
            font-family: 'Prompt', sans-serif;
                position: relative;
                background-color: #0974ba ; /* Green */
                border: 1px black;
                color: white;
                padding: 10px 32px;
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

        .card2 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                /*margin-top: 20px;*/
                border-radius: 10px;
                width: 50%;
            }

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        input[type=date], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }
        input[type=time], select {
            font-family: 'Prompt', sans-serif;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
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
                <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
                <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
                <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
                <a href="?controller=user&action=logoutNurse&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
                <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
                <i class='fas fa-user-alt' style='font-size:24px'></i></a>

                <?php echo $userid?>
            </div>
            

<div class="card2 center">
    <form method="get" action = "">
    <table align="center">
        <tr>
            <td align="right">โรงพยาบาล : </td>
            <td><label> <select name="H_name">
            <option value=""> เลือกโรงพยาบาล </option>
            <?php foreach($hospitalmodelList as $hos) {echo "<option value = $hos->Hid>$hos->H_name</option>";}?>
            </select>
            </label></td>
        </tr>
        <tr>
            <td align="right">วันที่ : </td>
            <td><label> <input type = "date" name = "max_date" /> </label></td>
        </tr>
        
        <tr>
            <td align="right"><input type="checkbox" name="select-all" id="select-all" /></td>
            <td><label for="select-all"> ALL </label> </td><br>
        </tr>
        <tr>
            <td align="right"><input type="checkbox" name="checkbox-1" id="checkbox-1" value="08:30-09:30"/></td>
            <td><label for="checkbox-1"> 08:30 - 09:30</label> </td>
        </tr>

        <tr>
            <td align="right"><input type="checkbox" name="checkbox-2" id="checkbox-2" value="09:30-10:30"/></td>
            <td><label for="checkbox-2"> 09:30 - 10:30 </label> </td>
        </tr>
        <tr>
            <td align="right"><input type="checkbox" name="checkbox-3" id="checkbox-3" value="10:30-11:30"/></td>
            <td><label for="checkbox-3"> 10:30 - 11:30 </label></td>
        </tr>
        <tr>
            <td align="right"><input type="checkbox" name="checkbox-4" id="checkbox-4" value="13:00-14:00"/></td>
            <td><label for="checkbox-4"> 13:00 - 14:00 </label></td> 
        </tr>
        <tr>
            <td align="right"><input type="checkbox" name="checkbox-5" id="checkbox-5" value="14:00-15:00"/></td>
            <td><label for="checkbox-3"> 14:00 - 15:00 </label></td> 
        </tr>
        <tr>
            <td align="right"><input type="checkbox" name="checkbox-6" id="checkbox-6" value="15:00-16:00"/></td>
            <td><label for="checkbox-3"> 15:00 - 16:00 </label></td> 
        </tr>
        <!-- <tr>
            <td align="right">เวลาเปิดทำการ : </td>
            <td><label>  <input type = "time" name = "max_topen" /> </label></td>
        </tr>
        <tr>
            <td align="right">เวลาปิดทำการ : </td>
            <td><label>  <input type = "time" name = "max_tclose" /> </label></td>
        </tr> -->
        <tr>
            <td align="right">จำนวนที่รับ : </td>
            <td><label>  <input type = "text" name = "max_num" /> </label></td>
        </tr>
        
    </table>
        
<br>
        <div class="btn-group" align="center">
        <input type="hidden" name="controller" value="maxperday"/>
        <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
        <button class="button" type="submit" name="action" value="index">กลับ</button>
        <button class="button" type="submit" name="action" value="addMaxperday">บันทึก</button>
        </div>

    </form>
</div>

<script>
	$('#select-all').click(function(event) {   
		if(this.checked) {
			// Iterate each checkbox
			$(':checkbox').each(function() {
				this.checked = true;                        
			});
		} else {
			$(':checkbox').each(function() {
				this.checked = false;                       
			});
		}
	});
	</script>
</html>