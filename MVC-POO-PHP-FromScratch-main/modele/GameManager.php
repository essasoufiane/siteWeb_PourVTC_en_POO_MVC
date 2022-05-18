<?php
 require_once "Manager.php";
 require_once "Game.php";

class GameManager extends Manager {

    private $games;

    public function addGame($game){
        $this->games[] = $game;
    }

    public function getGames(){
        return $this->games;
    }

    public function getGameById($id){
        foreach($this->games as $game) {
            if ($id == $game->getId()) {
                return $game;
            }
        }
    }

    public function loadGames(){
        $req = $this->getBdd()->prepare("SELECT * FROM conducteur");
        $req->execute();
        $myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myGames as $game){
            $g = new Game($game['id_conducteur'],$game['prenom'],$game['nom']);
            $this->addGame($g);
        }

    }

    public function newGameDB($title,$nbPlayers){
        // $req = "INSERT INTO games (title, nb_players) VALUES (:title, :nbPlayers)";
        $req = "INSERT INTO conducteur (prenom, nom) VALUES (:prenom, :nom)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":prenom",$title, PDO::PARAM_STR);
        $statement->bindValue(":nom",$nbPlayers, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $g = new Game($this->getBdd()->lastInsertId(),$title,$nbPlayers);
            $this->addGame($g);
        }
        
    }


}