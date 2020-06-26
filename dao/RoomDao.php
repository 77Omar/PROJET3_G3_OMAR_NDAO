<?php
class RoomDao extends Manager{

    public function __construct(){
        $this->className="Room";
    }

    public function add($object){
        $req = "Insert";
        return $this->executeUpdate($req)!=0;

    }
}