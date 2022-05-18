<?php  ob_start(); ?>

<form method="POST" action="<?= URL ?>car/editvalid">
  <div class="form-group">
    <label for="title">Marque</label>
    <input type="text" name="Marque" value="<?= $User->getFirstname()?>" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="Modele">Modele</label>
    <input type="text" name="Modele" value="<?= $User->getLastname()?>" class="form-control" id="Modele">
  </div>
  <div class="form-group">
    <label for="couleur">couleur</label>
    <input type="text" name="couleur" value="<?= $User->getCouleur()?>" class="form-control" id="couleur">
  </div>
  <div class="form-group">
    <label for="immatriculation">immatriculation</label>
    <input type="text" name="immatriculation" value="<?= $User->getImmatriculation()?>" class="form-control" id="immatriculation">
  </div>
  <input type="hidden" name="id_vehicule" value="<?= $User->getId()?>">
  <button class="btn btn-success" value="<?= $User->getId()?>" type="submit">Editer</button>
</form>


<?php

$content =ob_get_clean();
$title = "Edition de: " . $User->getTitle();
require_once "base.html.php";
?>