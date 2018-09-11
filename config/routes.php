<?php


if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
    case 'login':
      $connexion = new ConnexionController();
      $connexion->index();
      break;
    case 'logout':
      $connexion = new ConnexionController();
      $connexion->logout();
      break;
    case 'maintenance':

      break;
    case 'connect':
      $connexion = new ConnexionController();
      $connexion->connect($bootstrap->instance);
      break;
    case 'home':
      $home = new HomeController();
      $home->index();
      break;
    default:
        $connexion = new ConnexionController();
        $connexion->logout();
      break;
  }

} else {
    header('location:index.php?action=login');
    die();
}

?>