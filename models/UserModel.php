<?php

class UserModel
{

    public $db;

    //public function __construct()
    //{

        try {
            $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d583l7ucmi14j1;', 'whcxkhxgfgjals', '142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //       } catch (Exception $exception) {
   //         die($exception);
     //   }
    //}

    public function add($pseudo, $password)
    {
        $req = $this->db->prepare("INSERT INTO utilisateurs (pseudo,password) VALUES (?,?)");
        $req->execute([$pseudo, $password]);
    }

    public function check($pseudo, $password)
    {
        //CHECK IF THE USER EXISTS
        $req = $this->db->query("SELECT * FROM utilisateurs WHERE pseudo = '{$pseudo}'");
        //GET USER FROM DB AS AN OBJECT
        $userFromDB = $req->fetchObject();
        //IF I HAVE ONE RESULT, THEN I'LL CHECK THE PASSWORD
        if ($req->rowCount() == 1) {
            //IF THE PASSWORD ARE THE SAME, THE USER IS CONNECTED
            if ($userFromDB->password == $password) {
                return true;
            } //ELSE THE USER IS REDIRECTED TO THE LOGIN  PAGE
            else {
                return false;
                //header("location:login.php");
            }
        }
        return;
    }

    /*public function delete($id)
    {
        $this->db->exec("DELETE from utlisateurs where id = $id");
    }

    public function update($pseudo, $id)
    {
        $req = $this->db->prepare("update utilisateurs set pseudo = (?) where Id=(?)");
        $req->execute([$pseudo, $id]);
    }*/
}
