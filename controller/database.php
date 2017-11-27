<?php
class Database{
  public $db_name;
  public $db_user;
  public $db_pass;
  public $db_host;
  public $pdo;
  public function __construct(){
    // $this->db_name = $db_name;
    // $this->db_user = $db_user;
    // $this->db_pass = $db_pass;
    // $this->db_host = $db_host;
    $this->pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d583l7ucmi14j1;', 'whcxkhxgfgjals', '142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  public function query($statement){
    $req=$this->getPDO()->query($statement);
    $datas= $req->fetchAll(PDO::FETCH_OBJ);
      return $datas;
  }
  public function getImg(){
    $res = $this->pdo->query('SELECT * FROM images');
    $img = $res->fetchAll(PDO::FETCH_OBJ);
    var_dump($img);
  }
}
 ?>


