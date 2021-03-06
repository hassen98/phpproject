<?php
echo'hallo';
  require('connexion.php');
  $req=$bd->prepare('DELETE  FROM user WHERE id= :num ');
 

   $req ->bindValue(':num', $_GET['numadmin'] , PDO::PARAM_INT);
   $req->execute();

  $req ->closeCursor();  
?>