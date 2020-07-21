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
      <img src="images/photo1.jpg" class="img-fluid" alt=""/>
    </div>
    <div id="photo2" class="tab-pane">
      <img src="images/photo2.jpg" class="img-fluid" alt=""/>
    </div>
    <div id="photo3" class="tab-pane">
      <img src="images/photo3.jpg" class="img-fluid" alt=""/>
    </div>

  </div>
</main>
</body>
</html>