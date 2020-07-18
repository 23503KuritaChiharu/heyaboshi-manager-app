<?php
include 'db_config.php'

$products = array();

try {
 
        // PDOインスタンスを生成
        $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
 
// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {
 
  // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();
 
  // 強制終了
  exit;
 
}
?>