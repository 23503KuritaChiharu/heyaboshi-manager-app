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
      ['西暦', '兆円'],
      ['2007年',  0.93],
      ['2008年',  0.85], 
      ['2009年',  0.82],
      ['2010年',  0.91],
      ['2010年',  1.03]          
    ]);
 
    // オプションの設定
    var options = {
      title: 'bbbbbbbb',
     };
              
    // 指定されたIDの要素に折れ線グラフを作成
    if (!chart)
     chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      
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
  <div id="chart_div2" style="width: 100%; height: 350px"></div>
  
</body>
</html>