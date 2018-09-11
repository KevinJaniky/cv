<?php

class Bootstrap
{
  private $_error = false;
  public $instance;

  /*
   *  Constructeur
   *  Appel des méthodes permettant le bon fonctionnement de l'application
   */
  public function __construct()
  {
    $this->_setEnvironnement();
    //$this->database();
    $this->_maintenance();
  }

  /*
   *
   *  Fonction PDO permettant la connexion a la base de données
   */
  public function database()
  {
    try {
      $instance = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
      return $this->instance = $instance;
    } catch (Exception $error) {
      $this->_error = true;
    }
  }

  /*
   *
   *  En fonction de la valeur de la constante ENV on affichera des erreurs ou non ( permet le debug ).
   */
  private function _setEnvironnement()
  {
    if (ENV === 'PRODUCTION') {
      ini_set('display_errors', 0);
    } else {
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
    }
  }

  /*
   *  Si une erreur empechant le fonctionnement de l'app est detecter , on retourne la page de maintenance.
   */
  private function _maintenance()
  {
    if ($this->_error) {
      header('location:maintenance.php');
      die();
    }
  }


}