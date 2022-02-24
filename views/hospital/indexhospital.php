<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="search"> Search </button>
</form>
<table border = 1>
<tr>
<td><b>ชื่อโรงพยาบาล</td>
<td><b>เวลาเปิดทำการ</td>
<td><b>เวลาปิดทำการ</td>
<td><b>ราคาตรวจ RT-PCR</td>
<?php foreach( $hospitalmodelList as $hospitallist)
{
    echo "<tr> <td>$hospitallist->H_name</td>
    <td>$hospitallist->H_time_open</td>
    <td>$hospitallist->H_time_close</td> 
    <td>$hospitallist->H_price</td> 
    </td></tr>";
}
echo "</table>";
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Hospital</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width: 50%;">
            <div class="text-center mt-5 mb-4">
                <h2>THG Hospital</h2>
            </div>

            <input type="text" class="form-control" id="hospital" autocomplete="off"
                placeholder="Search Hospital...">
    </div>

    <div id="searchresult"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#hospital").keyup(function(){
                var input = $(this).val();
                //alert(input);

                if(input != ""){
                    $.ajax({

                        url:"livesearch.php",
                        method:"POST",
                        data:{input:input},

                        success:function(data){
                            $("#searchresult").html(data);
                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });
        });
    </script>
</body>
</html>
