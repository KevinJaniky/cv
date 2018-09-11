<?php

class Connexion
{

  /*
   *
   *  Fonction appellant toute les methodes permettant la verification des données de l'utilisateur lors de la connexion
   *  params : instance de type PDO / name de type string / password de type string
   */
  public function connect($instance, $name, $password)
  {
    $data = $this->getUserByUserName($instance, $name, $password);
    if ($this->userExist($data)){
      return $data;
    }
    return false;
  }

  /*
   *
   *  Fonction recuperant une donnée user en base selon des critères ( name, group, password )
   *  params : instance de type PDO / name de type string / password de type string
   * return array
   */
  private function getUserByUserName($instance, $name, $password)
  {
    $query = $instance->prepare('SELECT * 
                                 FROM user
                                 WHERE email = :email
                                 AND password = :pwd');
    $query->execute([
      'email' => $name,
      'pwd' => $this->generatePassword($password)
    ]);
    return $query->fetch();
  }

  /*
   *
   *  Fonction testant le retour de getUserByUserName permetant de dire si une données user est en base ou non.
   *  params : $data de type array.
   *  return bool
   */
  public function userExist($data)
  {
    if (empty($data))
      return false;
    return true;
  }

  /*
   *
   *  Fonction de Hashage (md5)
   *  params :  password de type string
   *  return : password hashé
   */
  private function generatePassword($password)
  {
    return md5($password . KEY);
  }
  

}
