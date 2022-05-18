<?php  ob_start();?>

<form method="POST" action="<?= URL ?>car/cvalid">
  <div class="form-group">
    <label for="title">ID du véhicule</label>
    <input type="text" name="id_vehicule" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="marque">Marque</label>
    <input type="text" name="marque" class="form-control" id="marque">
  </div>
  <div class="form-group">
    <label for="modele">Modele</label>
    <input type="text" name="modele" class="form-control" id="modele">
  </div>
  <div class="form-group">
    <label for="couleur">couleur</label>
    <input type="text" name="couleur" class="form-control" id="couleur">
  </div>
  <div class="form-group">
    <label for="immatriculation">immatriculation</label>
    <input type="text" name="immatriculation" class="form-control" id="immatriculation">
  </div>
  <button class="btn btn-success" type="submit">Envoyer</button>
</form>

<?php

$content =ob_get_clean();
$title = "Inscrivez votre véhicule";
require_once "base.html.php";

?>