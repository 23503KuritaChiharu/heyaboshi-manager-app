<?php
// defineの値は環境によって変えてください。
define('HOSTNAME', '127.0.0.1');
define('DATABASE', 'library_db');
define('USERNAME', 'root');
define('PASSWORD', ' ');

try {
  /// DB接続を試みる
  $db  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
  $msg = "MySQL への接続確認が取れました。";
} catch (PDOException $e) {
  $isConnect = false;
  $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
}
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>MySQL接続確認</title>
  </head>
  <body>
    <h1>MySQL接続確認</h1>
    <p><?php echo $msg; ?></p>
  </body>
</html>