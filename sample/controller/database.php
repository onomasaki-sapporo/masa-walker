<?php

class Database {

  function connectDb() {
    $dns = 'mysql:dbname=app;host=db;charset=utf8mb4';
    $usr = 'root';
    $pwd = 'rian-hotate';
    
    $dbh = new PDO($dns, $usr, $pwd);
    return $dbh;
  }

  function fetch($pdo, $sql, $param) {
    try {
      $prepare = $pdo->prepare($sql);
      $execute = $prepare->execute($param);
      return $prepare->fetch(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
    }
  }

  function fetchAll($pdo, $sql, $param) {
    try {
      $prepare = $pdo->prepare($sql);
      $execute = $prepare->execute($param);
      return $prepare->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
    }
  }

  function execute($pdo, $sql, $param) {
    try {
      $prepare = $pdo->prepare($sql);
      $execute = $prepare->execute($param);
    } catch(Exception $e) {
    }
  }

}
