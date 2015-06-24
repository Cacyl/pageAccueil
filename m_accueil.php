<?php
function connexion_bdd()
{
    $bdd = new PDO('mysql:host=localhost;dbname=camille;charset=utf8', 'root', '');
    return $bdd;
}
function insert($nom,$prenom,$password){
    $bdd = connexion_bdd();
    $bdd->exec("INSERT INTO formulaire VALUES (NULL, '".$nom."', '".$prenom."' , '".$password."')");
}
?>
