<?php
    include('includes/head.php');

    include('includes/header.php');
?>

<p>
    <a href="index.php">Retour à la liste des articles</a>
</p>

<div class='news'>

<?php

    include('includes/var_set.php');
    
    include('includes/db_call.php');

    /* Contrôle de la présence d'un billet valide
     Ce test mérite d'être amélioré, pour l'instant on ne teste que la présence de la variable
     Il faut confirmer qu'on a bien une valeur numérique existante dans la table
    */

    if (!isset($_GET['id_billet'])) {
        echo 'Désolé, une erreur s\'est produite pour afficher votre article.<br/>Merci de retourner à la liste des articles.';
    } else {
        $id_billet = htmlspecialchars($_GET['id_billet']);
        
        // Requête d'affichage de l'article sélectionné

        $billet = $db_miniblog->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM ' . $table_article . ' WHERE id=' . $id_billet);
        
        $billet = $billet->fetch();
?>
    
    <h3><?php echo $billet['titre'] . ' (Posté le ' . $billet['date_creation'] . ' par ' . $billet['auteur'] . ')'; ?></h3>
    
    <p><?php echo $billet['contenu']; ?></p>
</div>

<div>

<?php
    $commentaires = $db_miniblog->query('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y %Hh%i\') AS date_commentaire FROM ' . $table_commentaires . ' WHERE id_billet=' . $id_billet);
?>
    <h2>Commentaires</h2>

<?php
    while ($list_commentaires = $commentaires->fetch()) {
?>
    <p><?php echo $list_commentaires['auteur'];?> a dit (<?php echo $list_commentaires['date_commentaire']; ?>) : <?php echo $list_commentaires['commentaire'];?></p>

</div>

<?php
    }
}
?>
</html>