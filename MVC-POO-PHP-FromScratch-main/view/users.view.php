<?php  
require_once "modele/UserManager.php";
$userManager = new UserManager();
$userManager->loadUsers();
$users = $userManager->getUsers();
ob_start(); 
?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-secondary text-white">
    <tr>
      <th scope="col">ID du véhicule</th>
      <th scope="col">Marque</th>
      <th scope="col">Modele</th>
      <th scope="col">couleur</th>
      <th scope="col">immatriculation</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php foreach($users as $user) :?>
        <tr>
          <td><?= $user->getId() ?></td>
          <td><?= $user->getFirstname() ?></td>
          <td><?= $user->getLastname() ?></td>
          <td><?= $user->getCouleur() ?></td>
          <td><?= $user->getImmatriculation() ?></td>
          <td><a href="<?= URL ?>car/edit/<?= $user->getId() ?>"><i class="fa-solid fa-edit"></i></a></td>
          <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     <?php endforeach; ?>   

  </tbody>
</table>

<a class="btn btn-success w-25 d-block m-auto" href="<?= URL ?>car/addc">Ajouter un utilisateur</a>

<?php

$content =ob_get_clean();
$title = "Nos véhicules";
require_once "base.html.php";

?>


