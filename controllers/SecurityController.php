<?php
class SecurityController extends Controller{

    public function __construct()
    {
        $this->folder = "frontend";
        $this->layout = "default";
        $this->validator = new Validator();

    }

    public function index(){
        $this->view = "home";
        $this->render();

    }
    //Use Case
    public function  addBatiment(){
      $this->dao=new BatimentDao();
      $this->dao->insertBatiment($_POST['name']);
    }
    public function  addRoom(){
        $this->dao=new RoomDao();
        $this->dao->insertRoom($_POST['numchamb'],$_POST['class'],$_POST['typechamb']);
    }
    public function  addStudent(){
        $this->dao=new StudentDao();
        $this->dao->insertStudent($_POST['matricul'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['date'],$_POST['adress'],$_POST['dpart'],$_POST['chambr'],$_POST['type']);
    }
    public function ListRoom(){
        $this->dao=new RoomDao();
        $this->dao->ShowRoom($_POST['limit'], $_POST['offset']);
    }

    public function connexion(){

        if(isset($_POST['btn'])){
            extract($_POST);
            $this->dao=new  RoomDao();
            //Validation
            $this->validator->isVide($class,"class","Le champ est vide");
            $this->validator->isVide($name,"name","Le champ est vide");
            if($this->validator->isValid()){
                $this->dao->findByAll($class,$name);
                $this->data_view["title"]="Formulaire d'enregistrement";
                $this->frontend="saveroom";
                $this->render();
            }else{
                $this->data_view["error"]= $this->validator->getErrors();
                $this->index();
            }

        }else{
            $this->index();
        }

    }


    public function save_etudiant(){
        $this->view="save_etudiant";
        $this->render();
    }
    public function saveroom(){
        $this->view="saveroom";
        $this->render();
    }
    public function gestion_etudiant(){
        $this->view="gestion_etudiant";
        $this->render();
    }
    public function gestion_chambre(){
        $this->view="gestion_chambre";
        $this->render();
    }
    public function Batiment(){
        $this->view="Batiment";
        $this->render();
    }
    public function list_chambre(){
        $this->view="list_chambre";
        $this->render();
    }

}
?>