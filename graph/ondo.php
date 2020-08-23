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

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
    https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-database.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyDwizDxSbdLAAFrOmm5v0gwyiVVBt8QKYk",
    authDomain: "heyaboshi-manager.firebaseapp.com",
    databaseURL: "https://heyaboshi-manager.firebaseio.com",
    projectId: "heyaboshi-manager",
    storageBucket: "heyaboshi-manager.appspot.com",
    messagingSenderId: "767584081695",
    appId: "1:767584081695:web:ff141bebf62fed516d822a",
    measurementId: "G-W1K945Y27G"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
    
  </head>

<body>
    <div id="target"></div>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        (function() {
            'use strict';

            function drawChart(datas) {
                var target = document.getElementById('target');
                var data;
                var options = {
                    title: '温度',
                    width: 400,
                    height: 300,
                    hAxis: {title: '時間'},
                    // vAxis: {title: '温度'},
                    // curveType: 'function',
                    pointSize: 10,
                    pointShape: 'square',
                    chartArea: {width:'50%',height:'80%'}
                };
                var chart = new google.visualization.LineChart(target);
                data = new google.visualization.arrayToDataTable([
                    ['時間', '温度'],
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
        })();
        
        firebase.database().ref('/devices').chdir('test_device_1').once('value').then(function(snapshot) {
            datas = snapshot.val();
            console.log(datas);
            google.charts.setOnLoadCallback(drawChart(datas));
        });
    </script>

     <!--  グラフの描画エリア -->
     <body onresize="drawChart()">
  
</body>

</html>