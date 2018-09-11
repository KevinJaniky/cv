<?php

class HomeController
{
   /*
    *  Constructeur
    *  Si l'utilisateur n'est pas connecté redirect vers Login
    */
  public function __construct()
  {
    
  }

  /*
   *
   *  Retourne la vue Home
   */
  public function index()
  {
    require_once(__DIR__ . '/../views/home/index.php');
  }

}