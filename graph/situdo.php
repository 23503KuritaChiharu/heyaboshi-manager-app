<!doctype html>
<html lang="ja">
  <head>
    <title>部屋干しマネージャー</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/graph_page.css?<?php echo date('Ymd-His'); ?>">
    
  </head>

<body>
    <div id="target2"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        (function() {
            'use strict';

            function drawChart() {
                var target2 = document.getElementById('target2');
                var data;
                var options = {
                    title: '湿度',
                    width: 400,
                    height: 300,
                    hAxis: {title: '時間'},
                    vAxis: {title: '湿度'},
                    // curveType: 'function',
                    pointSize: 10,
                    pointShape: 'square',
                    chartArea: {width:'50%',height:'80%'}
                };
                var chart = new google.visualization.LineChart(target2);
                data = new google.visualization.arrayToDataTable([
                    ['時間', '湿度'],
                    ['0', 0],
                    ['1', 50],
                    ['2', 68],
                    ['3', 70],
                    ['4', 50],
                    ['5', 45],
                ]);

                chart.draw(data, options);
            }

            google.charts.load('current',{packages: ['corechart']});
            google.charts.load("visualization", "1", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
        })();
    </script>

</body>

</html>