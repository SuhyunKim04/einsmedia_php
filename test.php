<!DOCTYPE html>
<html lang="en">
<head> 
    <title>einsmedia </title>
    <?php include './inc/top.php'; ?> 
    <style>
        .center {
            width:500px;height:500px;
            background-color:#e8e8e8;
            position:relative;
        }

        .inner {
            position:absolute;
            padding:50px;background-color:olive;
            color:#fff;
            transform: translate(-50%,-50%);
            top:50%;left:50%;
        }
        </style>
</head>
<body>    
    <div class="center">
        <div class="inner">A</div>
    </div>
    <div class="box a">BOX</div>
    <div class="box b"></div>
    <div class="box c"></div>
    <div class="box d"></div>



    <div class="wrap"></div> <!-- right, violet -->
    <div class="contain"></div> <!-- left, red -->
    <div class="slide"></div>

    
    <!-- <div class="icon">HELLO</div> -->
    <div class="icon2">ICON2</div>
    <div class="icon3">ICON3</div>
</body>
</html>