<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        
    </head>

    <style>
        

        .try2{
            text-align:center;
            font-family: 'Prompt', sans-serif;
        }

        .header {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
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

        .card {
            text-align:center;
            font-family: 'Prompt', sans-serif;
            /*font-size: 16px;*/
            background-color: white;
            padding: 10px;
            margin-top: 10px;
        }


    </style>

    <div class="header">
        <h2> SIGN IN </h2>
    </div>


    <div class="card">
    <form method="get" action="">
        <label> เลขบัตรประชาชน <input type="text" name="uid"/> </label>
        <br>
        <label> คำนำหน้าชื่อ <select name="preid"> 
            <?php foreach($prenameList as $pre){
                echo "<option value=$pre->id> $pre->name </option>";
            }
            ?>
            </select>
        </label>
        <br>
        <label> ชื่อ <input type="text" name="uname"/> </label>
        <br>
        <label> นามสกุล <input type="text" name="usurname"/> </label>
        <br>
        <label> วันเดือนปีเกิด <input type="date" name="udob"/> </label>
        <br>
        <label> เบอร์โทรศัพท์ <input type="text" name="uphone"/> </label>
        <br>
        <label> E-mail <input type="text" name="umail"/> </label>
        <br>
<input type="hidden" name="controller" value="user"/>
        <button type="submit" name="action" value="indexlogin"> BACK </button>
        <button type="submit" name="action" value="adduser"> NEXT </button>
        
    </form>
    
    </div>
</html>