<?php

$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '123456';

try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from `t1`";
    $res = $dbh->query($sql);
    echo "<pre>";
    var_dump($res);
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

