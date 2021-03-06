<?php
  $servername = 'localhost';
  $username = 'root';
  
  
  //On essaie de se connecter
  try{
      $bd = new PDO("mysql:host=$servername;dbname=sanes", $username,"");
      //On définit le mode d'erreur de PDO sur Exception
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
  }
  
  /*On capture les exceptions si une exception est lancée et on affiche
   *les informations relatives à celle-ci*/
  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
?>
