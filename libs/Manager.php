<?php
abstract class Manager implements IDao{
    //Connexion est Fermée
    static $pdo=null;
    protected $tableName;
    protected $className;

    static function getConnexion(){
        //Connexion est fermée
       // if($this->pdo==null){
            try{
                self::$pdo = new PDO("mysql:host=localhost;dbname=poo-mvc","root","");
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                return self::$pdo;
            }catch(PDOException $ex){
                die("Erreur de Connexion");
            }

       // }

    }

    private function closeConnexion(){

        if($this->pdo!=null){
            $this->pdo=null;
        }
    }

    public function executeUpdate($sql){
        $this->getConnexion();
        $nbreLigne= $this->pdo->exec($sql);
        $this->closeConnexion();
        return $nbreLigne;
    }

    public function executeSelect($sql){

        $this->getConnexion();
        //Traitement
        $result=$this->pdo->query($sql);
        $data=[];
        foreach( $result as $rowBD){
            //ORM=> tuple BD transformer en Objet
            $data[]=new $this->className($rowBD);//new User($rowBD)
        }
        $this->closeConnexion();
        return $data;

    }

    public function findAll(){
        $sql="select * from $this->tableName";
        $data=$this->executeSelect($sql);
    }
    public function findById($id){
        $sql="select * from $this->tableName where id=$id";
        $data=$this->executeSelect($sql);
        return count($data)==1?$data[0]:$data;

    }

    public function update($obj){

    }
    public function add($obj){
        $req = "";
        return $this->executeUpdate($req)!=0;
    }

    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
    //Execution Requete MaJ(Insert,Update,delete)
    //Execution requete Select


}