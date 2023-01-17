<?php
require "header.php";
$connexion=new mysqli("localhost","root","","ecommerce");
$requete="SELECT nom,prenom from client";
$LesCLients=$connexion->query($requete);
foreach($LesCLients as $UnClient){
    echo " - " . $UnClient['nom'].$UnClient ['prenom']."<br>";
}
?>