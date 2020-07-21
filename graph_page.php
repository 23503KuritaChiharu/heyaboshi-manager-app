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

</head>
<body>
<main class="p-3">
  <!-- 4個分のタブ -->
  <ul class="nav nav-tabs nav-justified justify-content-center">
    <li class="nav-item">
      <a href="#photo1" class="nav-link active" data-toggle="tab">温度</a>
    </li>
    <li class="nav-item">
      <a href="#photo2" class="nav-link" data-toggle="tab">湿度</a>
    </li>
    <li class="nav-item">
      <a href="#photo3" class="nav-link" data-toggle="tab">含水量</a>
    </li>
  </ul>

  <!-- 写真部分 -->
  <div class="tab-content">
    <div id="photo1" class="tab-pane active">
      <?php
        include __DIR__. '/graph/ondo.php';
      ?>
    </div>
    <div id="photo2" class="tab-pane">
      <?php
        // include __DIR__. '/graph/situdo.php';
      ?>
    </div>
    <div id="photo3" class="tab-pane">
      <?php
        // include __DIR__. '/graph/water.php';
      ?>
    </div>

  </div>
</main>
</body>
</html>