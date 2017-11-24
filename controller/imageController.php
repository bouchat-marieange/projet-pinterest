
<?php

class ImageController{


  public $imageModel;
  public function __construct(){

      {

            try {
                $this->db = new PDO("mysql:host=10.20.1.23;dbname=pinterest", "root", "user");
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (Exception $exception) {
                die($exception);
            }
        }
    }
  }


public function


}









 ?>
