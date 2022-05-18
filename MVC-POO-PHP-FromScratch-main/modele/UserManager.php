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


}