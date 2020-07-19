<?php
  $connectstr_dbhost = 'RD0004FFD12EB6-57332';
  $connectstr_dbname = '';
  $connectstr_dbusername = 'root';
  $connectstr_dbpassword = '';

  foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
  }

  define('DB_DATABASE', 'sentakumono');
  define('DB_USERNAME', $connectstr_dbusername);
  define('DB_PASSWORD', $connectstr_dbpassword);
  define('PDO_DSN', 'mysql:host='.$connectstr_dbhost.';dbname='. DB_DATABASE . ';charset=utf8;');
?>