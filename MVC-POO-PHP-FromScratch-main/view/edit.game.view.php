<?php  ob_start(); ?>

<form method="POST" action="<?= URL ?>games/editvalid">
  <div class="form-group">
    <label for="title">Prénom</label>
    <input type="text" name="prenom" value="<?= $game->getTitle()?>" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="nbPlayers">Nom</label>
    <input type="text" name="nom" value="<?= $game->getNbPlayers()?>" class="form-control" id="nbPlayers">
  </div>
  <input type="hidden" name="id_conducteur" value="<?= $game->getId()?>">
  <button class="btn btn-success" value="<?= $game->getId()?>" type="submit">Editer</button>
</form>


<?php

$content =ob_get_clean();
$title = "Edition de: " . $game->getTitle();
require_once "base.html.php";
?>