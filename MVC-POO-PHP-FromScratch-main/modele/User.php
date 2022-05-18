<?php

class User {

    private $id_vehicule;
    private $Marque;
    private $Modele;
    private $couleur;
    private $immatriculation;

    public function __construct($id_vehicule,$Marque,$Modele,$couleur,$immatriculation){
        $this->id_vehicule = $id_vehicule;
        $this->Marque = $Marque;
        $this->Modele = $Modele;
        $this->couleur = $couleur;
        $this->immatriculation = $immatriculation;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->Marque;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($Marque)
    {
        $this->Marque = $Marque;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->Modele;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($Modele)
    {
        $this->Modele = $Modele;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id_vehicule;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id_vehicule)
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }
}