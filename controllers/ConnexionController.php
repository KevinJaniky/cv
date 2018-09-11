<?php

require_once __DIR__ . '/../models/Connexion.php';

class ConnexionController
{
    /*
     *  Constructeur
     *  Si l'utilisateur est connecté redirect vers Home sauf dans le cas du logout
     *
     */
    public function __construct()
    {
        $logout = false;
        if (isset($_GET['action'])) {
            if ($_GET['action'] !== 'logout') {
                if (!empty($_SESSION['id'])) {
                    header('location:home');
                    die();
                }
            }
        }

    }

    /*
     *
     *  Retourne la vue de login
     *
     */
    public function index()
    {
        require_once(__DIR__ . '/../views/connexion/login.php');
    }

    /*
     *
     *  Permet la connexion
     *  params : instance de type PDO
     *
     *  Si la connexion retourne vrai: l'utilisateur est redirigé vers la HOME et les sessions sont crée
     *  Si la connexion retourne faux: On retourne une error grace a une session "flash" et on redirige vers la page de connexion
     */
    public function connect($instance)
    {

        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $name = trim($_POST['username']);
            $password = $_POST['password'];

            $connexion = new Connexion();
            $result = $connexion->connect($instance, $name, $password);
        
            if ($result) {
                $this->createSession($result);
                header('location:index.php?action=home');
                die();
            } else {
                $_SESSION['error'] = 'Combinaison email / password non reconnu.';
                header('location:index.php?action=login');
                die();
            }
        }

    }

    /*
     *
     *  Création des Session contenant les données utilisateurs
     *  params : data de type array
     *
     */
    private function createSession($data)
    {
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
    }

    /*
     *
     *  Déconnexion : detruit les session et redirige vers la page de connexion
     *
     */
    public function logout()
    {
        session_destroy();
        header('location:index.php?action=login');
        die();
    }
}