<?php
class RoomDao extends Manager
{

    public function __construct()
    {
        $this->className = "Room";
        $this->tableName = "room";
    }
    public function delete($numRoom){
        $sql="delete from $this->tableName where id=$numRoom";
        return $this->executeUpdate($sql)!=0;
    }
    public function insertRoom($a,$b,$c){
        $pdo=Manager::getConnexion();
        $req=$pdo->prepare('INSERT INTO chambre SET numChambre=?, numBatiment=?, typechambre=?');
        $req->execute([$a,$b,$c]);
    }
    public function ShowRoom($a,$b){
        $pdo=Manager::getConnexion();
        $limit=$a;
        $offset=$b;
        /*$req=$pdo->prepare("SELECT * FROM chambre LIMIT {$limit} OFFSET {$offset}");*/
        $req=$pdo->query("SELECT * FROM chambre LIMIT {$limit} OFFSET {$offset}");
        $req->execute([$a,$b]);
        $row= $req->fetchAll(2);
        echo json_encode($row);
    }

}
