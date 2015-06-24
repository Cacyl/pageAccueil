<?php
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['mdp'])){
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $password = htmlentities($_POST['mdp']);
    insert($nom,$prenom,$password);
}

?>