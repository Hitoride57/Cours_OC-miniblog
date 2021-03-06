<?php
/*
Fichier de définition des variables récurrentes
Voir le fichier README.md pour la structure des tables
*/

$db_name = 'test';                          // Nom de la base de données pour le miniblog
$table_articles = 'billets';                 // Nom de la table pour le stockage des billets
$table_commentaires = 'commentaires';       // Nom de la table pour le stockage des commentaires

// Nombre de billets affichés par défaut en cas d'absence de choix précédent

if (isset($_POST['nb_billet'])) {
    $nb_billet = $_POST['nb_billet'];
} else {
    $nb_billet = '5';
}

// Récupération de l'adresse de la page affichée
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

/*
Conservation du pseudo en cas de commentaire précédemment posté
Mérite peut-être une optimisation
*/
if (isset($_POST['pseudo'])) {
    setcookie('pseudo', $_POST['pseudo'],  time() + 3600, null, null, false, true);
    $pseudo = htmlspecialchars($_POST['pseudo']);
} else if (isset($_COOKIE['pseudo'])) {
    $pseudo = $_COOKIE['pseudo'];
}

?>