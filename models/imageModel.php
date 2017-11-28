<?php


    $pdo = new PDO('mysql:dbname=pinterest;host=localhost','root' ,'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $pdo->query('SELECT * FROM images');
    $datas= $res->fetchAll(PDO::FETCH_OBJ);
    var_dump($datas[0]->lienimage);
