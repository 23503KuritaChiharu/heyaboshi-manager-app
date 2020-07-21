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
    
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p&display=swap" rel="stylesheet">
  </head>

<body>
  
  <div class="tabs">
    <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item" for="all">温度</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item" for="programming">湿度</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item" for="design">含水量</label>

    <div class="tab_content" id="all_content">
      <?php
        // include 'ondo.php';
        // include(dirname(__FILE__).'/graph/ondo.php');
        include __DIR__. '/graph/ondo.php';
      ?>
    </div>
    <div class="tab_content" id="programming_content">
      <?php
        // include '/graph/situdo.php';
        // include __DIR__. '/graph/situdo.php';
      ?>
    </div>
    <div class="tab_content" id="design_content">
      <?php
        // include __DIR__. '/graph/water.php';
      ?>
    </div>
  </div>
  </body>

  </html>