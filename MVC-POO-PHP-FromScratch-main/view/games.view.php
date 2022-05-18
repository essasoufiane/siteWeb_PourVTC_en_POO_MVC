<?php ob_start(); ?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php foreach($games as $game) :?>
        <tr>
          <td><?= $game->getTitle() ?></td>
          <td><?= $game->getNbPlayers() ?></td>
          <td><a href="<?= URL ?>games/edit/<?= $game->getId() ?>"><i class="fa-solid fa-edit"></i></a></td>
          <td>
          <form action="<?= URL ?>games/delete/<?= $game->getId() ?>" method="post" onsubmit="return confirm('etes-vous certain de vouloir supprimer ce jeu ?')"><button class="btn" type="submit"><i class="fa-solid fa-trash"></i></button></form>  
          </td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?= URL ?>games/add">Inscrivez-vous !</a>

<?php

$content =ob_get_clean();
$title = "Conducteur sur la platforme";
require_once "base.html.php";

?>


