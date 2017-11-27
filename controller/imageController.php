<?php


require 'database.php';
$db = new Database('pinterest');
$datas = $db->query('SELECT * FROM images');
var_dump($datas[0])





 ?>
