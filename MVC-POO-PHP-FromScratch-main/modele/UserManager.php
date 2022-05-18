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
        $req = $this->getBdd()->prepare("SELECT * FROM userA");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $user){
            $u = new User($user['id'],$user['firstname'],$user['lastname']);
            $this->addUser($u);
        }

    }


}