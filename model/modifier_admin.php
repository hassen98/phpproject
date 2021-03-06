
<?php
//connexion base de données
require('connexion.php');

//fonction generer mot de passe alléatoire 
function GenererMotDepasse($longueur = 10)
{
     $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $longueurMax = strlen($caracteres);
     $chaineAleatoire = '';
     for ($i = 0; $i < $longueur; $i++)
        {
              $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
    return $chaineAleatoire;
}
$mdp=GenererMotDepasse();
$crypteMotDepasse=md5($mdp);
$req=$bd->prepare("UPDATE user SET motdepasse='$crypteMotDepasse' WHERE id= :num ");
 

$req ->bindValue(':num', $_GET['numadmin'] , PDO::PARAM_INT);
$req->execute();

$req ->closeCursor();

?>