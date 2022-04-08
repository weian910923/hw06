<?php 

$student_score_arr=($_POST['student_score']);
$passing_score = "60";
$i = 0;
foreach($student_score_arr as $value)
{
  if($value >= $passing_score){ 
    $psssed++; 
  }else{
    $failed++;
  }
}
 
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <title>教師成績管理系統</title>
    <link href = "assets/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "assets/metisMenu.min.css" rel = "stylesheet">
    <link href = "assets/css/sb-admin-2.css" rel = "stylesheet">
    <link href = "assets/css/font-awesome.min.css" rel = "stylesheet" type = "text/css">
</head>
<body>
<nav class = "navbar navbar-inverse" align = right>
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
        </div>
        <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
            <ul class = "nav navbar-nav">
                <li class = "active"><a href = "AddStudnetsScore.php">新增學生成績<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "ShowStudnetsScore.php">查詢學生成績<span class = "sr-only">(current)</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<body>
<div class = "panel panel-default">
    <div class = "panel-heading">
        成績資料
    </div>
    <div class = "panel-body">
        <div class = "dataTable_wrapper">
            <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                <thead>
                <tr>
                    <th>學號</th>
                    <th>成績</th>
                </tr>
                </thead>
                <tbody>
                    <tr class = "odd gradeX">
                    <?php foreach($student_score_arr as $key => $score){?>
                        <td><?PHP echo $key; ?></td>
                        <td><?PHP echo $score; ?></td>
                    </tr>
                     <?php }?>
                </tbody>
            </table>
            <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                <thead>
                <tr>
                    <th>總共及格人數:</th>
                    <th>總共不及格人數:</th>
                </tr>
                </thead>
                <tbody>
                    <tr class = "odd gradeX">
                        <td><?PHP echo $psssed; ?></td>
                        <td><?PHP echo $failed; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src = "assets/js/jquery.js"></script>
<script src = "assets/js/bootstrap.min.js"></script>
</body>
</html>
