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

    include('includes/add_comment.php');

    /* Contrôle de la présence d'un billet valide
     Ce test mérite d'être amélioré, pour l'instant on ne teste que la présence de la variable
     Il faut confirmer qu'on a bien une valeur numérique existante dans la table
    */

    if (!isset($_GET['id_billet'])) {
        echo 'Désolé, une erreur s\'est produite pour afficher votre article.<br/>Merci de retourner à la liste des articles.';
    } else {
        $id_billet = htmlspecialchars($_GET['id_billet']);
        
        // Requête d'affichage de l'article sélectionné

        $billet = $db_miniblog->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM ' . $table_articles . ' WHERE id=' . $id_billet);
        
        $last_billet = $billet->fetch();
?>
    
    <h3><?php echo $last_billet['titre'] . ' (Posté le ' . $last_billet['date_creation'] . ' par ' . $last_billet['auteur'] . ')'; ?></h3>
    
    <p><?php echo $last_billet['contenu']; ?></p>
</div>

<?php
    $billet->closeCursor();
?>

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

    $commentaires->closeCursor();

?>
    <form action=<?php echo $actual_link ?> method='post'>
        Pseudo : <input type='text' name='pseudo' placeholder='Pseudo' <?php if (isset($pseudo)) { echo 'value=\'' . $pseudo . '\'';}?> required />
        Message : <input type='text' name='nv_commentaire' placeholder='Votre commentaire' required />
        <br />
        <input type='hidden' name='id_billet' value=<?php echo $id_billet ?> />
        <input type='submit' value='Envoyer le commentaire' />
    </form>

<?php
}
?>


</html>