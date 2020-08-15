<?php
// Cosmos DBに接続するライブラリのパスを指定する
require_once '/path/to/phpdocumentdb.php';
 
// DocmentDBのホスト名を指定する
$host = 'https://sentakumono.documents.azure.com:443/';
 
// DocumentDBのマスターキーを指定する
$master_key = 'Obix2WxJ7aahCsHAKklkVrtdvsJVKZqgaCJ5iB89izHJ2IVw9iI7EiaTa99Gtn3fSJ8L0MWeipTcS3sAv7uiyg==';
 
// DocumentDBに接続する
$documentdb = new DocumentDB($host, $master_key,$debug = true);
 
// データベースを選択する
$db = $documentdb->selectDB("testdb");
 
// コレクションを選択する
$col = $db->selectCollection("testcol");
 
// クエリを実行する
$result = $col->query("SELECT * FROM c");
 
// JSONをデコードする
$result_json = json_decode($result);
 
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CosmosDB</title>
  </head>
 
  <body>
    ID:<?php echo $result_json->Documents[0]->id; ?><br>
    Name:<?php echo $result_json->Documents[0]->name; ?>
  </body>
</html>