<!DOCTYPE html>
<html lang="en">
<head> 
    <title>einsmedia </title>
    <?php include './inc/top.php'; ?> 
    <style>
        table{
            border-spacing: 0;
            border-collapse: collapse;
            table-layout:fixed; 
            /* word-wrap:break-word; */
        }

        td, th{
            border: 1px solid #222;

            white-space:nowrap;
            overflow:hidden;
            text-overflow:ellipsis;
        }

        .table { display:table; border-collapse: collapse; }
        .row { display:table-row;}
        .cell { display:table-cell; border:1px solid red;padding:20px;}

        .tBox { width:80%; margin:0 auto; border:2px solid #000; border-width:2px 0;}
    </style>
</head>
<body>    
<div class="table">
        <div class="row">
            <div class="cell">A</div>
            <div class="cell">B</div>
            <div class="cell">C</div>
            <div class="cell">D</div>
        </div>
    </div>
    <table class="tBox">
        <caption>Score</caption>
        <colgroup>
            <col style="width:100px">
            <col style="width:calc( ( 100% - 100px ) / 2 )" span="2"> 
        </colgroup>
        <thead> 
            <tr>
                <th scope="col">Name</th>
                <th scope="col" id="math">math</th>
                <th scope="col">English</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th scope="row">Average</th>
                <td>35</td>
                <td>55</td>
            </tr>
        </tfoot>
    <tbody>
        <tr>
            <th scope="row" id="j">Jack</th>
            <td headers="math j">20</td>
            <td>http://good-morning.Hel loworld</td>
        </tr>
        <tr>
            <th scope="row">Swtt</th>
            <td>50</td>
            <td>40</td>
        </tr>
    </tbody>
  
    </table>    

   
</body>
</html>