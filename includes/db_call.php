// Fichier d'appel de la base de données

try {
    $db_miniblog = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}