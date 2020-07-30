<html>
  <head>
    <!-- CSS -->
    <link rel="stylesheet" href="#.css?<?php echo date('Ymd-His'); ?>">

    <title>部屋干しマネージャー</title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">

      google.load("visualization", "1", {packages:["corechart"]});
      var resizable_chart;
      var resizable_options;
      var resizable_data;
      google.setOnLoadCallback(
          function () {
              resizable_data = google.visualization.arrayToDataTable([
                ['時間', '含水量'],
                ['0', 0],
                ['1', 90],
                ['2', 78],
                ['3', 50],
                ['4', 30],
                ['5', 10],
              ]);
      
              resizable_options = {
                title: '含水量',
                width: 900,
                height: 700,
                hAxis: {title: '時間'},
                vAxis: {title: '含水量'},
                // curveType: 'function',
                pointSize: 20,
                pointShape: 'square'
              };
      
              resizable_chart = new google.visualization.LineChart(document.getElementById('gct_resizable_chart3'));
              resizable_chart.draw(resizable_data, resizable_options);
          }
      );

    </script>
  </head>
  <body onresize="resizable_chart.draw(resizable_data, resizable_options);">
    <div id='gct_resizable_chart3' style="width=100%; height=350p"></div>
  </body>
</html>