<html>
    <head> 
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>

    <style>
        .header {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            padding: 40px;
            text-align: center;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #0974ba;
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

        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 80%;
            
            }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            
            }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #0974ba;
            color: white;
            }

        .btn-group .button {
            /*border-radius: 5%;*/
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
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
            }
        
        .card3 {
                font-family: 'Prompt', sans-serif;
                background-color: #f1f1f1;
                font-size: 15px;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
            }

        .circle{
                text-align: center;
                background-color: #f1f1f1;
                padding: 10px 10px 10px 10px;
                margin: 10px 10px 10px 10px;
             
            }
        
        
        
        .leftcolumn {   
                float: left;
                width: 65%;
                
            }

            /* Right column */
        .rightcolumn {
                float: right;
                width: 29%;
                background-color: #f1f1f1;
                /*padding-left: 20px;*/
                /*margin-top: 20px;*/
            }

            /* Clear floats after the columns */
        .row:after {
                content: "";
                display: table;
                clear: both;
            }

        .try2{
            text-align:center;
            font-family: 'Prompt', sans-serif;
        }

        table {
            font-family: 'Prompt', sans-serif;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 20px 20px 20px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            text-align: center;
            padding: 8px;
        }

        th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #0974ba;
            color: white;
        }

        /*td:hover {
            background-color: #ddd;
        }*/

        #cus table {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        /*#cus tr  {
            border: 1px solid #ddd;
            padding: 8px;
            
            }*/
        
        #cus td:hover {
            background-color: #ddd;
        }

        .button {
            position: relative;
            background-color: #0974ba ; 
            border: 1px black;
            color: white;
            width: 100%;
            height: 100%;
            /* padding: 10px; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            /*float: center;*/
            border-radius: 50px;
        }

        .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .button:hover {
            background-color: #ddd;
            color: black;
        }

        
        

        input[type=text], select {
                font-family: 'Prompt', sans-serif;
                width: 95%;
                padding: 20px 20px 20px 20px;
                margin-top: 20px ;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16;
            }
        
            
    </style>

            <div class="topnav">
<<<<<<< Updated upstream
            <a href="?controller=booking&action=index&userid=<?php echo $userid?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
            <a href="?controller=user&action=logoutUser&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
            <a href="?controller=user&action=index&userid=<?php echo $userid?>" style="float:right">
=======
            <a href="?controller=booking&action=index&userid=<?php echo $userid;?>"> จองตรวจ RT-PCR </a>
            <a href="?controller=results&action=indexUser&userid=<?php echo $userid;?>"> ผลการตรวจ </a>
            <a href="?controller=hospital&action=indexUser&userid=<?php echo $userid;?>"> โรงพยาบาล </a>
            <a href="?controller=user&action=index&userid=<?php echo $userid;?>" style="float:right">
>>>>>>> Stashed changes
            <i class='fas fa-user-alt' style='font-size:24px'></i></a>

        <?php echo $userid;?>

        </div>
        
        <a href="?controller=booking&action=time&userid=<?php echo $userid;?>&Hid=<?php echo $name->Hid ;?>">try</a>


    <div class="try2">
        <br>
        <h2><?php echo $name->H_name ;?></h2>
    </div>
    
    <table  id="customers" align="center">
        
        <tr> 
            <th>วันที่</th>
            <th>เวลานัด</th>
            <th>จำนวนที่รับได้ต่อวัน</th>
            <th>จอง</th>
        </tr>
        <?php foreach($date as $booking)
        {
            echo "<tr> 
            <td>$booking->max_date</td>
            <td>$booking->max_topen - $booking->max_tclose</td>
            <td>$booking->max_num</td>
            <td> <a href=?controller=booking&action=checkbook&max_id=$booking->max_id&userid=$userid> จอง </a></td>
            </tr>";
        }
        echo "</table> ";

        $data = [];
        foreach ($dayList as $d) {
            $data[] = $d->x;
        }
        echo json_encode($data);

        $mon = [];
        foreach ($monthList as $m) {
            $mon[] = $m->x;
        }
        echo json_encode($mon);

        $dmy = [];
            foreach ($dmyList as $dm) {
            $dmy[]=$dm->d."-".$dm->month."-".$dm->year;
        }

    
    ?>


    <body>

    
        <script>
        var now = new Date();
        var month_array = new Array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        
        var da = [];
        da = <?=json_encode($data);?>;
        sum = da.length;
        // document.write(sum);

        var mon = [];
        mon = <?=json_encode($mon);?>;
        m_sum = mon.length;
        // document.write(m_sum);

        var dy= [];
        dy = <?=json_encode($dmy);?>;
       

        document.write("<form name=date_list><table  align=center><tr><td>");
        document.write("<select id=month onchange=change_month()>");
        for(i=0;i<month_array.length;i++)
        {
            if (now.getMonth() != i)
            {
            document.write ("<option value="+i+">"+month_array[i]);
            }
            else
            {
            document.write ("<option value="+i+" selected>"+month_array[i]);
            }

        }
        document.write("</select>");
        document.write("</td><td>");
        document.write ("<select id=year onchange=change_month()>");

        for(i=1950;i<3000;i++)
        {
            if (now.getFullYear() != i)
            {
            document.write("<option value="+i+">"+i);
            }
            else
            {
            document.write("<option value="+i+" selected>"+i);
            }
        }
        document.write("</select></td></tr><tr><td colspan=2><center>");

        document.write("<table id=cus bgcolor=white > <tr bgcolor=#0974ba >");
        document.write("<td> <font color=white> อา </td> <td> <font color=white> จ </td> <td><font color=white> อ </td>"+
        "<td><font color=white> พ </td> <td><font color=white> พฤ </td> <td><font color=white> ศ </td> <td ><font color=white> ส </td>");
        document.write("</tr><tr>");

        for(j=0;j<6;j++)
        {
            for(i=0;i<7;i++)
            {
            document.write("<td bgcolor=white align=center id=d"+i+"r"+j+"></td>")
            }
            document.write("</tr>");
        }

        document.write("</table> </div>");


        document.write("</center></from></td></tr></table>");

        var show_date = new Date();

        function set_cal(show_date)
        {
            begin_day = new Date (show_date.getFullYear(),show_date.getMonth(),1);
            begin_day_date = begin_day.getDay();
            end_day = new Date (show_date.getFullYear(),show_date.getMonth()+1,1);
            count_day = (end_day - begin_day)/1000/60/60/24;
            input_table(begin_day_date,count_day,begin_day);
        }
        set_cal(show_date);

        

        function input_table(begin,count,day)
        {
            
            init();
            j=0;
            if (begin == 0){
                i=0;
            }else{
                i=begin;
            }

            var t=[];
            for( z=0; z<dy.length; z++ ) {
                c1 = dy[z].substr(0,2);
                c2 = dy[z].substr(3,2);
                c3 = dy[z].substr(6);

                if(c2 == day.getMonth()+1 && c3 == day.getFullYear()){
                    //document.write(c1+" ||");
                    t.push(c1);
                }
            }
            //document.write(t.length);
            // if(day.getMonth()+1 == c2){
            
                if(t.length==0){
                    for (c=1;c<count+1;c++)
                    {
                    colum_name = eval("d"+i+"r"+j);
                    colum_name.innerHTML =  c;
                    i++;
                        if (i==7){
                            i=0;
                            j++;
                        }
                    }
                    // break;
                }
                else{
                    for (c=1;c<count+1;c++)
                    {
                        colum_name = eval("d"+i+"r"+j);
                        for(k=0;k<t.length;k++){
                            // document.write("cm");
                            if(c == t[k]){
                                // res = "<a href=?controller=booking&action=time&userid=<?php echo $userid;?>&Hid=<?php echo $name->Hid ;?>&post=>"+c+"</a>";
                                res = "<button  class='button' onclick='out()'>"+c+"</button>";
                                colum_name.innerHTML = res ;
                                break;
                            }
                            else{
                                colum_name.innerHTML =  c;
                            }
                         }
                        i++;
                        if (i==7){
                            i=0;
                            j++;
                        }
                   
                    }
                }
            
            
        }


        function init(){
            for(j=0;j<6;j++)
            {
                for(i=0;i<7;i++){
                    colum_name = eval("d"+i+"r"+j);
                    colum_name.innerText =  "-";
                    //colum_name.style.backgroundColor ="";
                    //colum_name.style.color ="";
                }
            }
        }

        function change_month(){
            var x = document.getElementById("month").value;
            var y = document.getElementById("year").value;
            //document.write("month : " +  x +"<br>"); 
            //document.write("year : " +  y +"<br>"); 
            //document.write("cha mo");
            show_date = new Date(y,x,1);
            set_cal(show_date);
        }

        function out(m){
            return m;
        }


        </script>

    </body>
</html>
