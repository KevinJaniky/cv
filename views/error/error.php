<?php
  if(!empty($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }
?>