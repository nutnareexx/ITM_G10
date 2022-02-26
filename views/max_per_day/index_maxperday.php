<br>


<html>
<head> 
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> 
</head>

<style>
    .try1{
        font-family: 'Prompt', sans-serif;
        text-align: center;
        
    }

</style>

<div class="try1">
<h3>new max per day <a href="?controller=maxperday&action=newMaxperday"> click!!! </a> </h3>


<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="maxperday"/>
    <button type="submit" name="action" value="search"> 
Search </button>
</form>

<table border = 1 >
    <tr> <td>โรงพยาบาล</td> 
    <td>วันที่</td>
    <td>เวลาเปิดทำการ</td>
    <td>เวลาปิดทำการ</td>
    <td>จำนวนที่รับได้ต่อวัน</td>
    <td>update</td>
    <td>delete</td></tr>
    <?php foreach($maxperday_list as $m)
{
    echo "<tr> <td>$m->H_name</td>
    <td>$m->max_date</td>
    <td>$m->max_topen</td>
    <td>$m->max_tclose</td>
    <td>$m->max_num</td>
    <td> <a href=?controller=maxperday&action=updateForm&max_id=$m->max_id>update</a></td>
    <td> <a href=?controller=maxperday&action=deleteConfirm&max_id=$m->max_id>delete</td>
    </tr>";
}


echo "</table> "
?>

</div>