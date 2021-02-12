<?php
class Database {
  private $dbh;
  function __construct() {
    $db['host'] = "localhost";  // DBサーバのURL
    $db['user'] = "root";  // ユーザー名
    $db['pass'] = "root";  // ユーザー名のパスワード
    $db['dbname'] = "app";  // データベース名
    $dsn = 'mysql:dbname=app;host=127.0.0.1';
      
    $this->dbh = new PDO($dsn, $db['user'], $db['pass']);
  }
  
  function getArea() {
    $sql = 'SELECT * FROM area;';
    $prepare =  $this->dbh->prepare($sql);
    $prepare->execute();
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
  }
  
  function getAreaSearch($str) {
    $sql = "SELECT * FROM area WHERE areaName LIKE ?;";
    $prepare =  $this->dbh->prepare($sql);
    $prepare->execute(array('%' . $str . '%'));
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
  }
  
  function getConcertAll() {
    $sql = "SELECT prefectureName, deta, startData, endData 
            FROM concertSearch 
            LEFT JOIN prefecture 
              ON concertSearch.prefectureid = prefecture.prefectureid 
            WHERE concertSearch.status = 0;";
    $prepare = $this->dbh->prepare($sql);
    $prepare->execute();
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
  }
  
    function getAreaAll() {
    $sql = "SELECT areaName, prefectureName 
            FROM area 
            LEFT JOIN prefecture 
              ON area.areaID = prefecture.areaID;";
    $prepare = $this->dbh->prepare($sql);
    $prepare->execute();
    return $prepare->fetchAll(PDO::FETCH_ASSOC);
  }
}