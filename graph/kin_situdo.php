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
    <div id="target6"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        (function() {
            'use strict';

            function drawChart() {
                var target6 = document.getElementById('target6');
                var data;
                var options = {
                    title: '菌の増殖しやすさ',
                    width: 400,
                    height: 300,
                    hAxis: {title: '時間'},
                    vAxis: {title: '菌の増殖しやすさ'},
                    // curveType: 'function',
                    pointSize: 10,
                    pointShape: 'square',
                    chartArea: {width:'50%',height:'80%'}
                };
                var chart = new google.visualization.LineChart(target6);
                data = new google.visualization.arrayToDataTable([
                    ['時間', '菌の増殖しやすさ'],
                    ['0', 0],
                    ['1', 35],
                    ['2', 28],
                    ['3', 27],
                    ['4', 23],
                    ['5', 25],
                ]);

                chart.draw(data, options);
            }

            google.charts.load('current',{packages: ['corechart']});
            google.charts.load("visualization", "1", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
        })();
    </script>

     <!--  グラフの描画エリア -->
     <body onresize="drawChart()">
  
</body>

</html>