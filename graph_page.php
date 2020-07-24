<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <title>部屋干しマネージャー</title>
  <!-- Bootstrap用CSSの読み込み -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  />
  <!-- Bootstrap用JavaScriptの読み込み -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

　<!-- CSS -->
　<link rel="stylesheet" href="css/graph_page.css?<?php echo date('Ymd-His'); ?>">

<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
  <div>
    <a href="index.php"><h5 class="mt-2 ml-2"><i class="material-icons" style="vertical-align: middle">
keyboard_arrow_left
</i> <span>TOP</span></h5></a>
  </div>
<main class="p-3">
  <!-- 4個分のタブ -->
  <ul class="nav nav-tabs nav-justified justify-content-center">
    <li class="nav-item">
      <a href="#ondo" class="nav-link active" data-toggle="tab">温度</a>
    </li>
    <li class="nav-item">
      <a href="#situdo" class="nav-link" data-toggle="tab">湿度</a>
    </li>
    <li class="nav-item">
      <a href="#water" class="nav-link" data-toggle="tab">含水量</a>
    </li>
  </ul>

  <!-- グラフ部分 -->
  <div class="tab-content">
    <div id="ondo" class="tab-pane active">
      <?php
        include __DIR__. '/graph/ondo.php';
      ?>
    </div>
    <div id="situdo" class="tab-pane">
      <?php
        // include __DIR__. '/graph/situdo.php';
      ?>
    </div>
    <div id="water" class="tab-pane">
      <?php
        // include __DIR__. '/graph/water.php';
      ?>
    </div>

  </div>
</main>
</body>
</html>