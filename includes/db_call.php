<?php
// Fichier d'appel de la base de données

try {
    $db_miniblog = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>