<?php
 require_once "Manager.php";
 require_once "User.php";

class UserManager extends Manager {

    private $users;

    public function addUser($user){
        $this->users[] = $user;
    }

    public function getUsers(){
        return $this->users;
    }
    public function getUserById($id_vehicule){
        foreach($this->users as $user) {
            if ($id_vehicule == $user->getId()) {
                return $user;
            }
        }
    }

    public function loadUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM vehicule");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $user){
            $u = new User($user['id_vehicule'],$user['marque'],$user['modele'],$user['couleur'],$user['immatriculation']);
            $this->addUser($u);
        }

    }

    public function newCarDB($id_vehicule,$Marque,$Modele,$couleur,$immatriculation){
        // $req = "INSERT INTO games (title, nb_players) VALUES (:title, :nbPlayers)";
        $req = "INSERT INTO vehicule (id_vehicule, marque, modele, couleur,immatriculation) VALUES (:id_vehicule, :marque, :modele, :couleur, :immatriculation)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id_vehicule",$id_vehicule, PDO::PARAM_INT);
        $statement->bindValue(":marque",$Marque, PDO::PARAM_STR);
        $statement->bindValue(":modele",$Modele, PDO::PARAM_STR);
        $statement->bindValue(":couleur",$couleur, PDO::PARAM_STR);
        $statement->bindValue(":immatriculation",$immatriculation, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if ($result) {
            $g = new User($this->getBdd()->lastInsertId(),$id_vehicule,$Marque,$Modele,$couleur,$immatriculation);
            $this->addUser($g);
        }
        
    }


}