<?php
$host = 'db';
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$db_name = $_ENV['MYSQL_DATABASE'];

$dbh = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);

function get_db_time() {
  global $dbh;
  $res = $dbh->query('SELECT now() as now;');
  $rows = $res->fetchAll();

  return $rows[0]['now'];
}

function say_hello($name) {
  return "Hello ".$name." :)";
}
