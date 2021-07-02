<?php
$host = 'db';
$user = 'devuser';
$password = 'devpwd';
$db_name = 'dbdev';

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
