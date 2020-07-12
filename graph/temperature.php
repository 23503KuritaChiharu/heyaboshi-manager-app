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
    <link rel="stylesheet" href="index.css?<?php echo date('Ymd-His'); ?>">
    
  </head>

<body>
    <div id="target"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        (function() {
            'use strict';

            function drawChart() {
                var target = document.getElementById('target');
                var data;
                var options = {
                    title: '温度',
                    width: 500,
                    height: 300,
                    hAxis: {title: '時間'},
                    vAxis: {title: '温度'},
                    // curveType: 'function',
                    pointSize: 10,
                    pointShape: 'square'
                };
                var chart = new google.visualization.LineChart(target);
                data = new google.visualization.arrayToDataTable([
                    ['時間', '温度'],
                    ['0', 0],
                    ['1', 30],
                    ['2', 28],
                    ['3', 27],
                    ['4', 23],
                    ['5', 25],
                ]);

                chart.draw(data, options);
            }

            google.charts.load('current',{packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
        })();
    </script>
</body>

</html>