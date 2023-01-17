
<?php
/*
require "header.php";
$connexion=new mysqli("localhost","root","","ecommerce");
$requete="SELECT nom,prenom from client";
$LesCLients=$connexion->query($requete);
foreach($LesCLients as $UnClient){
    echo $UnClient['nom'] . " " . $UnClient ['prenom']."<br>";
}
*/
?>
<?php
require "header.php";
$connexion=new mysqli("localhost","root","","ecommerce");
$requete="SELECT nom_produit,prix from produit";
$Lesproduits=$connexion->query($requete);
foreach($Lesproduits as $Unproduit){
    echo " - " . $Unproduit['nom_produit'] . " " . $Unproduit ['prix']."<br>";
}
?>
