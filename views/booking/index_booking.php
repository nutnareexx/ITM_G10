<!--<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<div class="container" style="max-width: 50%;">
            <div class="text-center mt-5 mb-4">
                <h2>การจองการตรวจRT-PCR</h2>
            </div>

            <input type="text" class="form-control" id="maxperday" autocomplete="off"
                placeholder="Search Hospital...">
            
    </div>

</html>-->

<html>
<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
</head>

<style>
    p.try1{
        font-family: "Sofia", sans-serif;
    }

    p.try2{
        font-family: 'Prompt', sans-serif;
    }
</style>

<body>
    <br>
    <h1> <p class="try2"> การจองการตรวจ RT-PCR </p> </h1>


    <form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="booking"/>
    <button type="submit" name="action" value="search"> 
Search </button>
</form>

    
    
    <?php foreach($hospitalmodelList as $hospital)
    {
    echo "<tr> 
    
    <td> <a href=?controller=booking&action=bookdate&Hid=$hospital->Hid>$hospital->H_name</a></td>
    
    </tr>";
    
    echo "<br>";
    
    
    }
echo "</table> "
?>
<input type="hidden" name="Hid" value="<?php echo $hospital->Hid;?>"/>

</body>

</html>    








