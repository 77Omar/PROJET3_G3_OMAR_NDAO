<?php
class BatimentDao{
    public function __construct(){
        $this->className="Batiment";
        $this->tableName="Batiment";
    }
    public function insertBatiment($num){
        $pdo=Manager::getConnexion();
       $req=$pdo->prepare('INSERT INTO batiment SET numBatiment=?');
       $req->execute([$num]);
    }

}