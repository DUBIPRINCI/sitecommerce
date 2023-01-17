<?php
$Nom=$_GET['nom'];
$Prenom=$_GET['prenom'];
$Mail=$_GET['mail'];
$Id=$_GET['id'];
$Mdp=$_GET['mdp'];


$connexion=new mysqli("localhost","root","","ecommerce");
$insertion="INSERT INTO client (nom,prenom,mail,id,password) VALUES ('$Nom','$Prenom','$Mail','$Id','$Mdp');";
$connexion->query($insertion);
$connexion->close();
?>
<?php require "header.php";
echo "Merci $Nom $Prenom, nous avons bien enregistrer votre profil"
?>