<?php

require_once "modele/UserManager.php";
class carController {
    private $carManager;


    public function __construct(){
        $this->carManager = new UserManager();
        $this->carManager->loadUsers();        
    }

    public function displayCar(){
        $games = $this->carManager->getUsers();
        require_once "view/users.view.php";
    }


    public function newCarForm(){
        require_once "view/new.car.view.php";
    }

    public function newCarValidation(){
    //   $this->carManager->newGameDB($_POST['title'],$_POST['nbPlayers']);
      $this->carManager->newCarDB($_POST['id_vehicule'],$_POST['marque'],$_POST['modele'],$_POST['couleur'],$_POST['immatriculation']);
      header('Location:' . URL . "car" );
   
    }

    public function editCarForm($id){
            echo $id;
    }

}


  


