<?php

class Game {


    private $id;
    private $title;
    private $nbPlayers;

    public function __construct($id,$title,$nbPlayers){

        $this->id = $id;
        $this->title = $title;
        $this->nbPlayers = $nbPlayers;
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }


    /**
     * Get the value of nbPlayers
     */ 
    public function getNbPlayers()
    {
        return $this->nbPlayers;
    }

    /**
     * Set the value of nbPlayers
     *
     * @return  self
     */ 
    public function setNbPlayers($nbPlayers)
    {
        $this->nbPlayers = $nbPlayers;

        return $this;
    }
}