<?php  ob_start();?>

<form method="POST" action="<?= URL ?>games/gvalid">
  <div class="form-group">
    <label for="title">Prénom</label>
    <input type="text" name="prenom" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="nbPlayers">Nom</label>
    <input type="text" name="nom" class="form-control" id="nbPlayers">
  </div>
  <button class="btn btn-success" type="submit">S'inscrire</button>
</form>

<?php

$content =ob_get_clean();
$title = "Inscrivez vous";
require_once "base.html.php";

?>