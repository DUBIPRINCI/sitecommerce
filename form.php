<?php require "header.php" ?>
    <div id="form">
        <h1> S'inscrire</h1>
        <hr width="300px">
        <form action=php.php method="get">
            <input placeholder="Entrez votre nom" type="text" name="nom">
            <input placeholder="Entrez votre prénom" type="text" name="prenom">
            <input placeholder="Entrez votre mail" type="text" name="mail">
            <input placeholder="Entrez votre id" type="text" name="id">
            <input placeholder="Entrez votre mot de pass" type="password" name="mdp">
            <input type="submit" value="valider">
    </div>


<?php require "footer.php" ?>