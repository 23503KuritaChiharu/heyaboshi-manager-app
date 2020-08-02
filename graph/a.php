<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<script type="text/javascript">
        google.load("visualization", "1.0", {packages:["corechart"]});
      
/**
         * グラフ表示
         */
        function drawChart(array) {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'days');
            data.addColumn('number', '売上高');
            var count = 0;
            var alphabet = "BCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
            for(var i = 0; i < alphabet.length; i++) {
              if(array[alphabet[i]+'1']){
                count++;
              }
            };
            data.addRows(count);
            for(var i = 0; i < alphabet.length; i++) {
              if(array[alphabet[i]+'1']){
                data.setValue(i, 0, array[alphabet[i]+'1']);
                data.setValue(i, 1, Number(array[alphabet[i]+'2']));
              }
            };
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, {
                width: "100%",
                height: 300,
                legend: {position: 'top', maxLines: 2 }, #凡例をグラフ上部、最大２行で表示します。
                fontSize: 10,#フォントサイズが結構大きめなのでフォントサイズを小さくしておきます。
                pointSize: 3,#折れ線にポイントがないので、ポイントをプロットさせます。
                tooltip:{ textStyle: { fontSize: 8} },#ポイントをクリックした際に表示されるツールチップのフォントサイズは更に小さくしておきます。
                series: {
                    0:{color: '#003399'},
                    1:{color: '#cc3333'},
                },
                chartArea:{left:70,top:25,width:"100%",height:"70%"}#グラフの描画位置を調整します。左は売上高の数字がくるんで70ピクセル開けて、上部は凡例が来るので25ピクセルあけています。横幅は目一杯使いたいので100％に、何故か高さは100％にすると横軸が表示できなくなるので70％ていどにしておきます。
            });
        }
</script>
</head>
<body>
  
  <!--  グラフの描画エリア -->
  <div id="chart_div"></div>
</body>
</html>