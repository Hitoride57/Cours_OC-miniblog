<?php
/*
Fichier de définition des variables récurrentes
Voir le fichier README.md pour la structure des tables
*/

$db_name = 'test';                          // Nom de la base de données pour le miniblog
$table_article = 'billets';                 // Nom de la table pour le stockage des billets
$table_commentaires = 'commentaires';       // Nom de la table pour le stockage des commentaires

// Nombre de billets affichés par défaut en cas d'absence de choix précédent

if (isset($_POST['nb_billet'])) {
    $nb_billet = $_POST['nb_billet'];
} else {
    $nb_billet = '5';
}
?>