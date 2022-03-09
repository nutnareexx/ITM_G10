<html>
<head> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" >
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        
        /* Font */
        .try2{
            text-align:center;
            font-family: 'Prompt', sans-serif;
        }

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

    </style>
</head>





<body>
    <br>

    <div class="topnav">
    <a href="?controller=maxperday&action=index&userid=<?php echo $userid?>"> วันเวลาที่รับตรวจ </a>
    <a href="?controller=results&action=indexNurse&userid=<?php echo $userid?>"> ผลการตรวจ </a>
    <a href="?controller=hospital&action=indexAdmin&userid=<?php echo $userid?>"> โรงพยาบาล </a>
    <a href="?controller=user&action=logout&userid=<?php echo $userid?>" style="float:right">
                    <i class='fas fa-door-open' style='font-size:24px'></i></a>
    <a href="?controller=user&action=indexAdmin&userid=<?php echo $userid?>" style="float:right">
        <i class='fas fa-user-alt' style='font-size:24px'></i></a>

    </div>

</body>

</html>
