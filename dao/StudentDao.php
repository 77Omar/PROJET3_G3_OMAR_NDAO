<?php
class StudentDao extends Manager{
    public function __construct(){
        $this->className="Student";
        $this->tableName="student";
    }
    public function insertStudent($e,$f,$g,$h,$i,$j,$k,$l,$m,$n){
        $pdo=Manager::getConnexion();
        $req=$pdo->prepare('INSERT INTO students SET matricule=?, nom=?, prenom=?, email=?, tel=?, datNaiss=?, adresse=?, nomdepart=?, numChambre=?, type_bourse=?');
        $req->execute([$e,$f,$g,$h,$i,$j,$k,$l,$m,$n]);
    }
}