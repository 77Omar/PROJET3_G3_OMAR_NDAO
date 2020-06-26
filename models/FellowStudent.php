<?php
class FellowStudent extends Student { //FellowStudent = Etudiant Boursier
    private $typeFellow;

    public function __contruct($tab=null){
        if($tab!= null){
            $this->initialize($tab);
        }
    }

    public function initialize($tab){
        $this->typeFellow= $tab['typeFellow']; //typeFellow = Type Bourse

    }
}