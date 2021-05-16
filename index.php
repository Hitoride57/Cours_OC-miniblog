<?php
    include('includes/head.php');

    include('includes/header.php');
?>

<div class='news'>

<?php

    include('includes/var_set.php');

    include('includes/db_call.php');

    $last_billet = $db_miniblog->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM ' . $table_article . ' ORDER BY date_creation DESC LIMIT 0,' . $nb_billet);

    while ($billet = $last_billet->fetch()) {
?>
    <h3><?php echo $billet['titre'] . ' (Posté le : ' . $billet['date_creation'] . ' par ' . $billet['auteur'] . ')'; ?></h3>
    <p>
        <?php echo $billet['contenu']; ?>
        <br />
        <a href="commentaires.php">Commentaires</a>
    </p>
<?php
    }
?>
    
</div>

</html>