<?php
class NonHousedStudent extends FellowStudent { //NonHousedStudent = Etudiant non logé
    private $adresse;

    public function __contruct($tab=null){
        if($tab!= null){
            $this->initialize($tab);
        }
    }

    public function initialize($tab){
        $this->adresse= $tab['adresse'];

    }
}