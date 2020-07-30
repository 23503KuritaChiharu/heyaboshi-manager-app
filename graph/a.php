<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
      
  var chart = null;
 
  // ライブラリのロード
  // name:visualization(可視化),version:バージョン(1),packages:パッケージ(corechart)
  google.load('visualization', '1', {'packages':['corechart']});     
         
  // グラフを描画する為のコールバック関数を指定
  google.setOnLoadCallback(drawChart);
 
  // グラフの描画   
  function drawChart() {         
 
    // 配列からデータの生成
    var data = google.visualization.arrayToDataTable([
      ['時間', '温度'],
      ['0',  0],
      ['1',  35], 
      ['2',  28],
      ['3',  27],
      ['4',  23],
      ['5',  25]                    
    ]);
 
    // オプションの設定
    var options = {
      title: '温度',
      hAxis: {title: '時間'},
      vAxis: {title: '温度'},
      pointSize: 10,
      pointShape: 'square'
     };
              
    // 指定されたIDの要素に折れ線グラフを作成
    if (!chart)
     chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      
    // グラフの描画
    chart.draw(data, options);
  }
        
  // onReSizeイベント    
  window.onresize = function(){
    
    drawChart();
    
  }
        
</script>
</head>
<body>
  
  <!--  グラフの描画エリア -->
  <div id="chart_div" style="width: 100%; height: 350px"></div>
  
</body>
</html>