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
    
    // getGameById = tien un id, regarde dans ma bdd, si j'ai le meme id que celui que je t'ai filer , bah rend le moi ! merci

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
    public function editGameDB($id,$title,$nbPlayers){

        $req = "UPDATE conducteur SET title = :prenom, nbPlayers = :nom WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id, PDO::PARAM_INT);
        $statement->bindValue(":prenom",$title, PDO::PARAM_STR);
        $statement->bindValue(":nom",$nbPlayers, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $this->getGameById($id)->setTitle($title);
            $this->getGameById($id)->setNbPlayers($nbPlayers);
        }
        
    }


}