<?php

require_once "modele/GameManager.php";
class GameController {
    private $gameManager;


    public function __construct(){
        $this->gameManager = new GameManager();
        $this->gameManager->loadGames();        
    }

    public function displayGames(){
        $games = $this->gameManager->getGames();
        require_once "view/games.view.php";
    }
    public function displayCar(){
        $games = $this->UserManager->getUsers();
        require_once "view/users.view.php";
    }

    public function newGameForm(){
        require_once "view/new.game.view.php";
    }
    public function newCarForm(){
        require_once "view/new.car.view.php";
    }

    public function newGameValidation(){
    //   $this->gameManager->newGameDB($_POST['title'],$_POST['nbPlayers']);
      $this->gameManager->newGameDB($_POST['prenom'],$_POST['nom']);
      header('Location:' . URL . "games" );
   
    }
    public function newCarValidation(){
    //   $this->gameManager->newGameDB($_POST['title'],$_POST['nbPlayers']);
      $this->UserManager->newCarDB($_POST['id_vehicule'],$_POST['marque'],$_POST['modele'],$_POST['couleur'],$_POST['immatriculation']);
      header('Location:' . URL . "car" );
   
    }

    public function editGameForm($id){
            echo $id;
    }

}


  


