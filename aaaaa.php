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

      <?php
        include __DIR__. '/graph/ondo_test2.php';
        include __DIR__. '/graph/situdo_test2.php';
        include __DIR__. '/graph/water_test2.php';
      ?>
    </div>

  </div>
</main>
</body>
</html>