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
    $this->pdo = new PDO('mysql:dbname=pinterest;host=localhost','root' ,'root');
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
