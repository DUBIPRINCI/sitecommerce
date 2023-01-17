<?php require "header.php" ?>
    <div id="form">
        <h1> Modifier Un utilisateur</h1>
        <hr width="300px">
        <form action=php.php method="get">
            <input placeholder="Entrez l'id" type="text" name="id_user">
            <input placeholder="Entrez le nouveau prénom" type="text" name="prenom_user">
            <input placeholder="Entrez le nouveau mail" type="text" name="mail_user">
            <input placeholder="Entrez le nouveau nom" type="text" name="nom_user">
            <input placeholder="Entrez le nouveau mot de passe" type="password" name="mdp_user">
            <input type="submit" value="valider">
    </div>


<?php 
$Nom=$_GET['nom_user'];
$Prenom=$_GET['prenom_user'];
$Mail=$_GET['mail_user'];
$Id=$_GET['id_user'];
$Mdp=$_GET['mdp_user'];

$connect=new mysqli("localhost","root","","ecommerce");
$insertion="INSERT INTO client (nom,prenom,mail,id,password) VALUES ('$Nom','$Prenom','$Mail','$Id','$Mdp');";
$connexion->query($insertion);
$connexion->close();
require "footer.php" ?>