<?php
    include('includes/head.php');

    include('includes/header.php');
?>

<div class='news'>

<?php

    include('includes/var_set.php');

    include('includes/db_call.php');

    // Requête pour l'affichage des $nb_billet derniers articles

    $last_billet = $db_miniblog->query('SELECT id, auteur, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y\') AS date_creation FROM ' . $table_article . ' ORDER BY date_creation DESC LIMIT 0,' . $nb_billet);

    while ($billet = $last_billet->fetch()) {
?>
    <h3><?php echo $billet['titre'] . ' (Posté le ' . $billet['date_creation'] . ' par ' . $billet['auteur'] . ')'; ?></h3>
    <p>
        <?php echo $billet['contenu']; ?>
        <br />
        <a href="commentaires.php?id_billet=<?php echo $billet['id']; ?>">Commentaires</a>
    </p>
<?php
    }
?>
    
</div>

<!-- Choix du nombre d'articles à afficher -->

    <form method='post' action="index.php" class='news'>
        Nombre de billets à afficher :
        <select name="nb_billet">
            <option value=5>5</option>
            <option value=10>10</option>
            <option value=20>20</option>
            <option value=50>50</option>
        </select>
        <input type='submit' value='Afficher'>

    </form>

</html>