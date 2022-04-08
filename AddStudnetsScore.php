<?php
//變數 宣告陣列 從1 開始 student_score[1]
//placeholder  代表文字匡提示
//type="number"  數字  
//min="0" max="100"  設定最小值／最大值

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
            <form action = "ShowStudnetsScore.php" method = "post">
                <table width = "100%" class = "table table-striped table-bordered table-hover" id = "dataTables-example">
                    <thead>
                    <tr>
                        <th>學號</th>
                        <th>成績</th>
                    </tr>
                    </thead>
                    <tbody>
                        <th>1</th>
                        <td><input class = "form-control" placeholder = "score" type="number"  min="0" max="100" name = "student_score[1]"></td>
                    </tbody>
                    <tbody>
                        <th>2</th>
                        <td><input class = "form-control" placeholder = "score" type="number"  min="0" max="100" name = "student_score[2]"></td>
                    </tbody>
                    <tbody>
                        <th>3</th>
                        <td><input class = "form-control" placeholder = "score" type="number" min="0" max="100" name = "student_score[3]"></td>
                    </tbody>
                    <tbody>
                        <th>4</th>
                        <td><input class = "form-control" placeholder = "score" type="number" min="0" max="100"  name = "student_score[4]"></td>
                    </tbody>
                    <tbody>
                        <th>5</th>
                        <td><input class = "form-control" placeholder = "score" type="number" min="0" max="100"  name = "student_score[5]"></td>
                    </tbody>
                    <tbody>
                        <th>6</th>
                        <td><input class = "form-control" placeholder = "score" type="number" min="0" max="100" name = "student_score[6]"></td>
                    </tbody>
                </table>
                <button type = "submit" class = "btn btn-lg btn-success btn-block">確認</button>
            </form>
        </div>
    </div>
</div>
<script src = "assets/js/jquery.js"></script>
<script src = "assets/js/bootstrap.min.js"></script>
</body>
</html>