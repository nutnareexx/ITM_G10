<html>
  <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  </head>
 
  <style>
    .header {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                text-align: center;
            }

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
            input[type=file], select {
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

<div class="header">
  <h1> จองตรวจ RT-PCR 
  </h1>
</div>


<div class="card2">
  <form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">

      <label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/><br>
      </label>
      <br>
      <!--<input type="hidden" name="controller" value="results"/>-->
      <div class="btn-group">
      <input type="hidden" name="id" value="<?php echo $re->id;?>"/>
      <input type="hidden" name="uid" value="<?php echo $re->uid;?>"/>
      <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
      <button class="button" type="submit" name="button" id="button" value="upResult"> SUBMIT </button>
      </div>
  </form>
  <form method="get" action="">
    <div class="btn-group">
    <input type="hidden" name="controller" value="results"/>
    <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
    <button class="button" type="submit" name="action" value="indexNurse">Back</button>
    </div>
  </form>
</div>
</html>