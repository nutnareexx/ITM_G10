<html><table>
    <tr>
        
        <td> Day </td>
        <td> MONTH </td>
        <td> YEAR </td>
        <td> Hid </td>
    </tr>

    <?php foreach($dmyList as $p){
        echo "<tr>
        <td> $p->d </td>
        <td> $p->month </td>
        <td> $p->year </td>
        <td> $p->hid </td>
        </tr>";
    }
    echo "</table>";

    echo $g;

    $dayy = [];
    foreach ($dayList as $d) {
        $dayy[] = $d->x;
    }
    echo "<br> DAY <br>";
    foreach ($dayy as $d) {
        echo $d." ";
    }
    
    echo json_encode($dayy);

    $mon = [];
    foreach ($monthList as $m) {
        $mon[] = $m->x;
    }
    echo "<br> MONTH <br>";
    foreach ($mon as $m) {
        echo $m." ";
    }
    
    echo json_encode($mon);

    $dmy = [];
    foreach ($dmyList as $dm) {
        $dmy[]=$dm->d."-".$dm->month."-".$dm->year;
    }
    echo "<br> DAY MONTH YEAR <br>";
    foreach ($dmy as $dp) {
        echo $dp." | ";
    }

    
    

    // $h[$dayy]=$mon;
    // foreach ($h as $dayy=>$mon)
    // {
    //   echo "$dayy=$mon<br>\n";
    // }

   
    
    ?>

    <!-- <p id ="demo"> -->

    <script >
        //alert(data);
        document.write("<br> DAY <br>");
        var a_js = [];
        a_js = <?=json_encode($dayy);?>;
        for( var i=0; i<a_js.length; i++ ) {
            document.write( a_js[i]+"/");
        }

        document.write("<br> MONTH <br>");
        var mon = [];
        mon = <?=json_encode($mon);?>;
        for( var i=0; i<mon.length; i++ ) {
            document.write( mon[i]+"/");
        }

        document.write("<br> DAY MONTH YEAR  <br>");
        var dy= [];
        dy = <?=json_encode($dmy);?>;
        for( var i=0; i<dy.length; i++ ) {
            document.write( dy[i]+"/");
        }

        document.write("<br> SPLIT  <br>");
        var myArray =[];
        var my =[];
        for( var i=0; i<dy.length; i++ ) {
            
            myArray.push(dy[i].split("-"));
            sp(dy[i]);
        }
        
        var w;

        function sp(a){
            w= a.split("-");
            my.push(w);
        }

        document.write(myArray.length+"<br>");
        for( var i=0; i<myArray.length; i++ ) {
            document.write(myArray[i]+"|");
        }

        document.write(my.length+"<br>");
        for( var i=0; i<my.length; i++ ) {
                document.write(my[i]+"||");
        }

        document.write("<br> sub string  <br>");
        var c;
        // let result = dy[1].substr(0,1);
        // document.write(result);

        var t=[];
        for( var i=0; i<dy.length; i++ ) {
            c1 = dy[i].substr(0,2);
            c2 = dy[i].substr(3,2);
            c3 = dy[i].substr(6);
            document.write(c1+c2+c3+"<br>");
            if(c2 == 3){
                document.write(c1+" ||");
                t.push(c1);
            }

        }

        document.write("<br> T <br>");
        for(i=0;i<t.length;i++){
            document.write(t[i]+"|");
        }

        

        document.write("<br> func <br>");
        var show_date = new Date();
        begin = new Date (show_date.getFullYear(),show_date.getMonth(),1);
        //document.write(begin);
       
        function checkmonth(begin){
            document.write("<br> in ");
            for( x=0; x<=mon.length; x++ ) {
                
                if(begin.getMonth()+1==mon[x]){
                    document.write("1");
                    return 1;
                }
            }
            return 0;
        }

        if( checkmonth(begin)==1){
            document.write("check");
        }
        else{
            document.write("dont check");
        }

    
    </script>

</html>