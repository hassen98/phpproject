
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

$nom=$_POST['nom'];
$email=$_POST['email'];
$zone=$_POST['zone'];
$mdp=GenererMotDepasse();
$crypteMotDepasse=md5($mdp);
$role="admin";

$req = $bd->prepare('INSERT INTO user(nom,email,motdepasse,role,zone) VALUES(:nom, :email, :motdepasse, :role, :zone)');
$req->execute(array(
	'nom' => $nom,
	'email' => $email,
	'motdepasse' =>$crypteMotDepasse,
	'role' =>$role,
	'zone' =>$zone
	));

echo 'L admin  a bien été ajouté!';


?>