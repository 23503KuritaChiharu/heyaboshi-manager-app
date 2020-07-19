<?php
  include 'db_config.php';

  $products = array();

  try
  {
     // connect
     $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


     // 商品一覧を取得
     $stmt = $db->query("SELECT * FROM sentakumono");
     $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

     $db = null;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage();
   exit;
  }

?>